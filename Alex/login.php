<?php 

 	  include('config.php');
      include('error.php');

 ?>

	
	<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link type="text/css" rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="content">
      <div class="flex-div">
        <div class="name-content">
          <h1 class="logo">STUDENT SEARCH ENGINE</h1>
          <p>Find Students Official Transcripts and Connect with Schools</p>
        </div>
          <form method="POST" action="sign.php">
            <input type="text" name="username" placeholder="Email"  required />
            <input type="password" name="password" placeholder="Password"  required />
            <button class="login" type="submit" name="Login" value="Login">LogIn</button>
            <a href="#">Don't Have Account ?</a>
            <hr>
            <button class="create-account"><a href="register.php" style="color:white;">Create New Account</a></button>
          </form>
      </div>
    </div>
  </body>
</html>
