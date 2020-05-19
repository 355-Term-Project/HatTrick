 <?php include_once 'connection.php'; 

    $errors = array();

    if ( isset($_POST['signup-submit']) ){
        $username = pg_escape_string($pg_conn, $_POST['username']);
        $password = pg_escape_string($pg_conn,  $_POST['password']);
        $firstName = pg_escape_string($pg_conn, $_POST['firstname']);
        $lastName = pg_escape_string($pg_conn, $_POST['lastname']);
        $email = pg_escape_string($pg_conn, $_POST['email']);
        $usertype = pg_escape_string($pg_conn, $_POST['usertype']);

        echo "Connected successfully";

    $user_check_query = "SELECT * FROM hattrick.appuser WHERE username ='$username' 
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

        $query = "INSERT INTO appuser(username, password, firstname, lastname, email, usertype) 
                VALUES('$username', '$password', '$firstName', '$lastName', '$email', '$usertype');";
        pg_query($pg_conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: classroom.html');
    }

    }//end of outer if
    

?>
