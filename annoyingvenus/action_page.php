<?php
session_start();
$db = mysqli_connect('mars.cs.qc.cuny.edu', 'smmi0865', '23530865', 'smmi0865');
$errors = array();

if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  
      echo "Connected successfully";

  if (count($errors) == 0) {
  	//$password = md5($password);
  	$query = "SELECT * FROM appuser WHERE username='$username'AND password='$password';";
  	mysqli_query($db, $query);
  	if (mysqli_num_rows(mysqli_query($db, $query)) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
      if($_SESSION['usertype'] == 'P'){
      header('location: /professor.html');
    }
  }
}

?>
