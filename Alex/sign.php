<?php 

include('error.php');
include('config.php');
    
    if (isset($_POST['Login'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

      if (empty($username)) 
      {
          array_push($errors, "Username is required");
      }
      if (empty($password)) 
      {
          array_push($errors, "Password is required");
      }
      if (is_countable($errors) && count($errors) == 0) 
      {
          $password = md5($password);
          $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
          $stmt = $connexion->query($query);
          $total_result = $stmt->rowCount();


      if ($total_result == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: admin.php');
      }else {
      array_push($errors, "Wrong username/password combination");
        header('location: login.php');
      }
      }
      // else{
      //   array_push($errors);
      //   header('location: login.php');
      // }
      }

?>
