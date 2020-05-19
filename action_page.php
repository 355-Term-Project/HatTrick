<?php include_once 'connection.php'; 
session_start();
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
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>