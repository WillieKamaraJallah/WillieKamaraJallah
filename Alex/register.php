<?php 

 ?>

	
	<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link type="text/css" rel="stylesheet" href="css/login.css" />
  </head>
  <body>
    <div class="content">
      <div class="flex-div">
        <div class="name-content">
          <h1 class="logo">STUDENT SEARCH ENGINE</h1>
          <p>Find Students Official Transcripts and Connect with Schools</p>
          <a href="login.php"><button class="login_btn">Login</button></a>
        </div>
          <form method="POST" action="signup.php">
            <input type="text" name="username" placeholder="Full Name" required />
            <input type="text" name="school_name" placeholder="Name of School" required />
            <input type="text" name="email" placeholder="Email" required />
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_1" placeholder="Comfirm Password" required>
             <input type="text" name="sch_address" placeholder="School Address" required />
            <button class="login" type="submit" name="register" value="register">Register</button>
            <hr>
          </form>
          

      </div>

    </div>

  </body>
</html>
