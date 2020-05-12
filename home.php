<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->
<?php include ('db.php')?>
  <html>
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
    <h1 style="font-size:70px;text-align:center">HatTrick</h1>
    <img
      src="https://cdn.glitch.com/9bdad6e0-0d73-4119-9440-f462c0c46ad0%2FHot%20trick.jpg?v=1588529870992"
      alt="Hat"
      class="center"
    />
    <div class="coolsep">
      <div class="centerlogin">
        <form action="action_page.php" method="post">
          <div class="imgcontainer"></div>
          <div class="first">
            <b>Sign Up to Hat Trick</b>
            <p class="P-welcome">Welcome Back! Please sign up below</p>
            <div class="container" 　text-align="center">
              <p>
                <label for="uname"><b>Login ID</b></label>
              </p>
              <input
                type="text"
                text-align="center"
                placeholder=" "
                name="uname"
                required
              />

              <p>
                <label for="psw"><b>Password</b></label>
              </p>
              <input type="password" placeholder=" " name="psw" required />

              <p>
                <label for="uname"><b>First Name</b></label>
              </p>
              <input
                type="text"
                text-align="center"
                placeholder=" "
                name="uname"
                required
              />

              <p>
                <label for="uname"><b>Last Name</b></label>
              </p>
              <input
                type="text"
                text-align="center"
                placeholder=" "
                name="uname"
                required
              />

              <p>
                <label for="uname"><b>Email</b></label>
              </p>
              <input
                type="text"
                text-align="center"
                placeholder=" "
                name="uname"
                required
              />

              <p>
                <label for="uname"><b>User Type</b></label>
              </p>
              <input
                type="text"
                text-align="center"
                placeholder=" "
                name="uname"
                required
              />

              <p><button type="submit">Sign Up</button></p>
              <label> </label>
            </div>

            <div class="container" style="background-color: rgb(60, 60, 70);">
              <a href="signin.html" style="color: rgb(255,255,255)"
                >Already have an account? Sign In</a
              >
            </div>
          </div>
        </form>
      </div>
    </div>


<?php
  $sql='SELECT * FROM hattrick.appuser';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();
  print_r($details);
  ?>





    <!-- include the Glitch button to show what the webpage is about and
          to make it easier for folks to view source and remix -->
    <div class="glitchButton" style="position:fixed;top:20px;right:20px;"></div>
    <script src="https://button.glitch.me/button.js"></script>
  </body>
</html>
