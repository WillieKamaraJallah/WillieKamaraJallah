<?php 

	$server_name="localhost";
    $username="root";
    $password="";
    $database_name="alex";

    $sql = "SELECT * FROM school";
   
  try{
   $pdo = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Error");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Schools</title>
 	<link type="text/css" rel="stylesheet" href="css/style.css" />
 	<link type="text/css" rel="stylesheet" href="css/footer.css" />
	<link type="text/css" rel="stylesheet" href="css/header.css" />
    <link type="text/css" rel="stylesheet" href="css/card.css" />
	<script type="text/javascript" src="header.js"></script>
 </head>
 <body>

 	<!-- Nav Bar -->

			<div class="text">
        <h2>STUDENT SEARCH ENGINE</h2>
    </div>
    <div class="nav">
        <div class="logo">
            <a href="index.php">ALEX</a>
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="schools.php">Schools</a></li>
            <li><a href="fraud.php">Report Fraud</a></li>
            <li><a href="login.php">Login</a></li>
            <li class="nav-iten">
                    <a href="register.php"><button class="btn btn-info" style="background-color:blue; color: ;"> SIGN UP</button></a>
                  </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
  <!-- End Nav Bar -->

  <h1 style="text-align:center; color:black; font-weight: bolder !important; margin-top: 10px;">CHECK OUT OUR SCHOOLS</h1>

  <!-- ********************** SCHOOL CARDS ************** -->
  <?php 
     if($stmt->rowCount() > 0){
        
  ?>
  <?php while($rows = $stmt->fetch(PDO::FETCH_ASSOC)) 
        { 

        ?>
    <div class="card" style="margin:20px;">
    
 <!--  <img src="3.jpg" alt=" " style="width:100%"> -->
  <?php  echo'<img height="200" width="200" src="uploads/images/'.$rows['picture'].'" ">';?>
  <h3><?php echo $rows['school_name']; ?></h3> 
  <p class="price"><?php echo $rows['administrator']; ?></p>
  <p><?php echo $rows['address']; ?></p>
    
</div>
<?php 
               }
             }else{
              echo "<center><h2 style='color:red;margin-top:20px;margin-bottom:20px;'>No School Found !!!</h2></center>";
             }
          ?>

 <!-- Footer --> 
<div id="footer"> 
    <section id="cta"> 
        <h2>Subscribe to Newsletter</h2> 
        <p>Get Our Latest News</p> 
        <form> 
            <input type="text" placeholder="E-mail address" /> 
            <input type="submit" value="Try now" /> 
        </form> 
    </section> 
    <section id="resources"> 
        <h2>Academic</h2> 
        <div id="modules"> 
            <h2>Fraid</h2> 
            <div class="module"> 
                <h3>GO TO</h3> 
                <ul> 
                    <li><a href="index.php">Home</a></li> 
                    <li><a href="school.php">View School</a></li> 
                    <li><a href="fraud.php">Report Fraud</a></li> 
                    <li><a href="contact.php">Contact Us</a></li> 
                </ul> 
            </div> 
            <div class="module"> 
                <h3>Company</h3> 
                <ul> 
                    <li><a href="about.html">Mission</a></li> 
                    <li><a href="about.html">History</a></li> 
                    <li><a href="about.html">Staff</a></li> 
                    <li><a href="#">Management</a></li> 
                    <li><a href="contact.php">Contact</a></li> 
                </ul> 
            </div> 
            <div class="module"> 
                <h3>Contact</h3> 
                <ul> 
                    <li class="mail"><a href="">Support</a></li> 
                    <li class="phone"><a href="">+86 000 000 00</a></li> 
                </ul> 
            </div> 
            <div class="module"> 
                <h3>Academic Fraud Report</h3> 
                <p>Please feel free to contact us and report any fraud</p> 
                <ul> 
                    <li>Weicheng District. Wenlin Road</li> 
                    <li>Xianyang City, Shaanxi Province</li> 
                </ul> 
            </div> 
        </div> 
    </section> 
    <div id="signature" aria-hidden="true"></div> 
    <footer id="legal"> 
        <p>&copy; All rights reserved.</p> 
    </footer> 
</div> 
 </body>
 </html>