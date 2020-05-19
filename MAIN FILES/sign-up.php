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

    if ( isset($_POST['signup-submit']) ){
        $username = pg_escape_string($pg_conn, $_POST['username']);
        $password = pg_escape_string($pg_conn,  $_POST['password']);
        $firstName = pg_escape_string($pg_conn, $_POST['firstname']);
        $lastName = pg_escape_string($pg_conn, $_POST['lastname']);
        $email = pg_escape_string($pg_conn, $_POST['email']);
        $usertype = pg_escape_string($pg_conn, $_POST['usertype']);

        echo "Connected successfully";

    $user_check_query = "SELECT * FROM hattrick.appuser WHERE login ='$username' 
                        OR email ='$email' LIMIT 1;";
    $result = pg_query($pg_conn, $user_check_query);
    $user = pg_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        }
    }
    if (count($errors) == 0) {
        //$password = md5($password);//encrypt the password before saving in the database

        $query = "INSERT INTO appuser(login, pwd, first_name, last_name, email, user_type) 
                VALUES('$username', '$password', '$firstName', '$lastName', '$email', '$usertype');";
        pg_query($pg_conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: classroom.html');
    }

    }//end of outer if
    

?>
