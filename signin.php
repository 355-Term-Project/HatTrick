<?php include('action_page.php')?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello!</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- import the webpage's stylesheet -->
    <link rel="stylesheet" href="/style.css" />

    <!-- import the webpage's javascript file -->
    <script src="/script.js" defer></script>
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
        <form action="action_page.php" method="post">
        <?php include('errors.php');?>
          <div class="imgcontainer"></div>
          <div class="first">
            <b>Log in to Hat Trick</b>
            <p class="P-welcome">Welcome Back! Please log in below</p>
            <div class="container" 　text-align="center">
              <p>
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter username" name="username" required />
              </p>


              <p>
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required />
              </p>

              <button type="submit" name = "login_user">Sign In</button>
            </div>

            <div class="container" style="background-color: rgb(60, 60, 70);">
                <a href="home.html" style="color: rgb(255,255,255)"
                  >Don't have an account? Sign Up </a>

                  <br>
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
