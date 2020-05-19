<?php
session_start();
$db = mysqli_connect('127.0.0.1', 'root', '', 'hattrick');
$errors = array();

if ( isset($_POST['signup-submit']) ){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db,  $_POST['password']);
    $firstName = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastName = mysqli_real_escape_string($db, $_POST['lastname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $usertype = mysqli_real_escape_string($db, $_POST['usertype']);

    echo "Connected successfully";

$user_check_query = "SELECT * FROM appuser WHERE username ='$username' 
					 OR email ='$email' LIMIT 1;";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
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
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    if($usertype['usertype'] == 'professor'){
      header('location: profpage.php');
    }else
  	header('location: index.php');
  }
}


?>