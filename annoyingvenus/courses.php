<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: signin.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CS355 Term Project</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

   <style>
      
      /* Add a black background color to the top navigation */
.topnav {
  background-color: rgb(60, 60, 70);
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

body {
  font-family: helvetica, arial, sans-serif;
  margin: 2em;
}

header
{
  background-image: linear-
    gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(12.jpg);
    height: 100vh;
    background-size:cover;
    background-position: center
}
/* Bordered form */
/* form {
  border: 3px solid #8A2BE2;
} */

h1{
  font-size:70px;
  text-align:center;
}

/* Full-width inputs */
input[type=text], input[type=password], input[type=email]{
  width: 45%;
  padding: 10px 20px;
  margin: 8px 10px;
  display: inline-block;
  border: 2px solid #cca;
  box-sizing: border-box;
}

/* User Type DropDown Selections */
.type-dd{
  padding: 5px 10px;
  margin: 4px 5px;
  display: inline-block;
} 

/* Set a style for all buttons */
button {
  background-color: rgb(60, 60, 70);
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}


/* Add padding to containers */
.container {
  padding: 30px;
  text-align: center;
  background-color: #008080;
  background-size: 75% 50%;
  background-position: center;
}

/* Add padding to containers */
.imgcontainer {
  padding: 5px;
  text-align: center;
}

.first {
  padding: 10px;
  text-align: center;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 5px;
  
/* Centering image*/

  
}

.center-img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 10%;
}

/*These are for centering in the middle of the screen*/
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
  text-align: center;
}

.centerlogin {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
  text-align: center;
}
.coolsep {
  display: flex;
  flex-wrap: wrap;
  text-align: center;
}
.mainflex {
  flex: 40%;
  background-color: rgb(0, 240, 150);
}
.offleft {
  flex: 30%;
  background-color: rgb(0, 240, 250);
}
.offright {
  flex: 30%;
  background-color: rgb(0, 240, 250);
}

/* SIGNUP PAGE */

.signup-container{
 text-align: center;
}
.haveACC{
  padding: 25px;
  text-align: center;
  background-color: #008080;
  background-size: 75% 50%;
  background-position: center;
  
  background-color: rgb(60, 60, 70);
  color: rgb(255,255,255);
}
.signup-button{
  font-size: 15px;
}
.lazybutton {
    text-decoration: none; font: menu;
    display: inline-block; padding: 2px 8px;
    background: ButtonFace; color: ButtonText;
    border-style: solid; border-width: 2px;
    border-color: ButtonHighlight ButtonShadow ButtonShadow ButtonHighlight;
    background-color: rgb(255, 50, 50);
}
.lazybuttongreen {
    text-decoration: none; font: menu;
    display: inline-block; padding: 2px 8px;
    background: ButtonFace; color: ButtonText;
    border-style: solid; border-width: 2px;
    border-color: ButtonHighlight ButtonShadow ButtonShadow ButtonHighlight;
    background-color: rgb(0, 250, 50);
}
.lazybutton:active {
    border-color: ButtonShadow ButtonHighlight ButtonHighlight ButtonShadow;
        background-color: rgb(230, 50, 50);

}
.btn-group button {
    background-color: rgb(60, 60, 70);
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

/* Add a background color on hover */
.btn-group button:hover {
    background-color: rgb(60, 230, 50);
}
    </style>
  </head>
  <body>
    <h1>HatTrick</h1>
            <p class="P-welcome" style="text-align:center">CS355 Lawrence Teitelman<br>Internet and Web Tech</p>
                <div>
    
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p style="text-align:center">Welcome, <strong>
        <?php echo $_SESSION['username']; ?>
          
        </strong>
      </p>
      <p style="text-align:center"> <a href="index.php?logout='1'" 
           class = "lazybutton">Logout</a> </p>
    <?php endif ?>

    
</div>

<div>
  <h2 style="text-align:center" >
    Select a Course
    <!-- Three buttons in a group -->
    <form action = "classroom.php" method="get" target="_blank">
<div class="btn-group" style="width:100%" style="text-align:center">
  <button style="width:25%"
  onclick="window.location.href = 'classroom.php'">CS 355</button>
  <br>
</div>
 
</div>


  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

  </body>
</html>










