<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: index.html');
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
    <title>HatTrick</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
<body>


  <h1>HatTrick</h1>
    <img
      src="https://cdn.glitch.com/9bdad6e0-0d73-4119-9440-f462c0c46ad0%2FHot%20trick.jpg?v=1588529870992"
      alt="Hat"
      class="center-img"
    />

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
    	<p>Welcome, <strong>
    		<?php echo $_SESSION['username']; ?>
    			
    		</strong>
    	</p>
    	<p> <a href="index.php?logout='1'" 
    		   class = "lazybutton">Logout</a> </p>
    <?php endif ?>
</div>

    <div class="container" style="background-color: rgb(60, 60, 70);">
                <a href="home.php" style="color: rgb(255,255,255)"
                  >Don't have an account? Sign Up </a>

                  <br>

              <a href="signin.php" style="color: rgb(255,255,255)">
                Already have an account? Sign In </a>
    </div>



</body>
</html>