<?php include('action_page.php')?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Hello!</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
      
      /* Add a black background color to the top navigation */
.topnav {
  background-color: rgb(60, 60, 70);
  overflow: hidden;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
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
    </style>
  </head>
  <body>
    <h1 style="color:teal;font-size:70px;text-align:center">HatTrick</h1>
    <img
      src="https://cdn.glitch.com/9bdad6e0-0d73-4119-9440-f462c0c46ad0%2FHot%20trick.jpg?v=1588529870992"
      alt="Hat"
      class="center-img"
    />
    <div class="coolsep">
      <div class="centerlogin">
        <form action="signin.php" method="post">
         
          <?php include('errors.php');?>

          <div class="imgcontainer"></div>
          <div class="first">
            <b>Log in to Hat Trick</b>
            <p class="P-welcome">Welcome Back! Please log in below</p>
            <div class="container" 　text-align="center">
              <p>
                <label for="username"><b>Username</b></label>
                <input
                type="text"
                text-align="center"
                placeholder="Enter username"
                name="username"
                required
              />
              </p>


              <p>
                <label for="password"><b>Password</b></label>
                <input 
                type="password" 
                placeholder="Enter password" 
                name="password" 
                required />
              </p>

              <button type="submit" name = "login_user">Sign In</button>
            </div>

            <div class="container" style="background-color: rgb(60, 60, 70);">
                <a href="home.php" style="color: rgb(255,255,255)"
                  >Don't have an account? Sign Up </a>

                  <br>

                <a href="index.html" style="color: rgb(255,255,255)"
                >Go To Main Page </a>
            </div>

          </div>
        </form>
      </div>
    </div>

  </body>
</html>
