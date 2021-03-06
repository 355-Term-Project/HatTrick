<?php include('signup.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HatTrick</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css" />

    <!-- import the webpage's javascript file -->
    <script src="/script.js" defer></script>
  </head>
  <body>
    
    <h1>HatTrick</h1>
    <img
      src="https://cdn.glitch.com/9bdad6e0-0d73-4119-9440-f462c0c46ad0%2FHot%20trick.jpg?v=1588529870992"
      alt="Hat"
      class="center-img"
    />
    <div class="coolsep">
      <div class="centerlogin">
        <form class="signup-form" action="sign-up.php" method="post"></form>
          <div class="imgcontainer"></div>
          <div class="first">
            
            <b>Sign Up to Hat Trick</b>
            <p class="P-welcome">Welcome Back! Please sign up below</p>
            
            <div class="container" 　text-align="center">
              
              <p>
                <label for="username"><b>Username (Login ID)</b></label>
                <input type="text" placeholder="Enter username" name="username" required />
              </p>

              <p>
                <label for="password"><b>Password</b></label>          
                <input type="password" placeholder="Enter Password" name="password" required />
              </p>

              <p>
                <label for="firstname"><b>First Name</b></label>
                <input type="text" placeholder="Enter your first name" name="firstname" required />
              </p>
 

              <p>
                <label for="lastname"><b>Last Name</b></label>
                <input type="text" placeholder="Enter your last name" name="lastname" required />
              </p>

              <p>
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required />
              </p>

              <p>
                <label for="usertype"><b>What kind of user are you?</b></label>          
                <select id="usertype" name="usertype" class="type-dd">
                  <option value="student">Student</option>
                  <option value="professor">Professor</option>
                </select>
              </p>

              <button type="submit" class="signup-submit" name="signup-submit">
                Sign Up
              </button>
              
            </div>

            <div class="container" style="background-color: rgb(60, 60, 70);">
              <a href="signin.html" style="color: rgb(255,255,255)">
                Already have an account? Sign In </a><br>
                    <a href="student.html" style="color: rgb(255,255,255)"
                  >Student's Page Preview </a><br>
                  <a href="professor.html" style="color: rgb(255,255,255)"
                  >Professor's Page Preview </a>
                            <br>
                  <a href="contact.html" style="color: rgb(255,255,255)"
                  >Contact Us/Help</a>

            </div>
            
          </div>
        </form>
        
      </div>
    </div>

  </body>
</html>
