<?php 

session_start();

# This function reads your DATABASE_URL config var and returns a connection
# string suitable for pg_connect. Put this in your app.
function pg_connection_string_from_database_url() {
	extract(parse_url($_ENV["DATABASE_URL"]));
	return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
  }
  
  # Here we establish the connection. Yes, that's all.
  $pg_conn = pg_connect(pg_connection_string_from_database_url());


$errors = array();

if (isset($_POST['login_user'])) {
  $username = pg_escape_string($pg_conn, $_POST['username']);
  $password = pg_escape_string($pg_conn, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  
  echo "Connected successfully";

  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM hattrick.appuser WHERE username='$username'AND password='$password';";
  	pg_query($pg_conn, $query);
  	if (pg_num_rows(pg_query($pg_conn, $query)) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: classroom.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>