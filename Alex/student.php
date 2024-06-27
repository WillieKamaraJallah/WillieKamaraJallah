<?php 

    session_start();
    
    // START DATABASE CONNECTION
     $server_name="localhost";
    $username="root";
    $password="";
    $database_name="alex";

    $sql = "SELECT * FROM grades";

   
  try{
   $pdo = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Error");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
  // END DATABASE CONNECTION

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Result</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">
    <link rel="stylesgeet" href="https://rawgit.com/creativetimofficial/material-kit/master/assets/css/material-kit.css">
    <link type="text/css" rel="stylesheet" href="css/student.css" />
</head>
<body class="profile-page">
	<nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg "  color-on-scroll="100"  id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="index.php" target="_blank">HOME</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="dropdown nav-item">
                      <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                          <i class="material-icons">apps</i> Components
                      </a>
                      <div class="dropdown-menu dropdown-with-icons">
                        <a href="../index.php" class="dropdown-item">
                            <i class="material-icons">layers</i> All Components
                        </a>
                        
                        <a href="#" class="dropdown-item">
                            <i class="material-icons">content_paste</i> Documentation
                        </a>
                      </div>
                    </li>
      				<li class="nav-item">
      					<a class="nav-link" href="#" target="_blank">
      						<i class="fa fa-twitter"></i>
      					</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link" href="#" target="_blank">
      						<i class="fa fa-facebook-square"></i>
      					</a>
      				</li>
      				<li class="nav-item">
      					<a class="nav-link"  href="#" target="_blank">
      						<i class="fa fa-instagram"></i>
      					</a>
      				</li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="page-header header-filter" data-parallax="true" style="background-image:url('http://wallpapere.org/wp-content/uploads/2012/02/black-and-white-city-night.png');"></div>
    <div class="main main-raised">
		<div class="profile-content">
            <div class="container">
                <div class="row">
	                <div class="col-md-6 ml-auto mr-auto">
        	           <div class="profile">
	                        <div class="avatar">
	                            <img src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Circle Image" class="img-raised rounded-circle img-fluid">
	                        </div>
	                        <div class="name">
	                            <h3 class="title"><?php echo $_SESSION['search']; ?></h3>
								<h4><?php echo $_SESSION['school_name']; ?></h4>
                                <h4><?php echo $_SESSION['term']; ?></h4>
                                 
                                <!-- <h3 class="title">GRADE : 11TH</h3>
 -->				<a href="#pablo" class="btn btn-just-icon btn-link btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-link btn-pinterest"><i class="fa fa-pinterest"></i></a>
	                        </div>
	                    </div>
    	            </div>
                </div>

                <!-- Student Table Data -->
                <center><h3 class="title">STUDENT GRADES REPORT</h3></center>
                <div class="table-responsive"> 

                    <table class="table">

    <th style="background-color:#080d1c; color: white;">Math</th>
    <th style="background-color:#080d1c; color: white;">English</th>
    <th style="background-color:#080d1c; color: white;">Chemistry</th>
    <th style="background-color:#080d1c; color: white;">Biology</th>
    <th style="background-color:#080d1c; color: white;">History</th>
    <th style="background-color:#080d1c; color: white;">Physics</th>
    <th style="background-color:#080d1c; color: white;">Literature</th>
    <tr>
            <tr> 
            <td><?php echo $_SESSION['Math']; ?></td> 
            <td><?php echo $_SESSION['English']; ?></td> 
            <td><?php echo $_SESSION['Chemistry']; ?></td> 
            <td><?php echo $_SESSION['Biology']; ?></td> 
            <td><?php echo $_SESSION['History']; ?></td>
            <td><?php echo $_SESSION['Physic']; ?></td>
            <td><?php echo $_SESSION['Literature']; ?></td> 
            </tr> 
                                                
  </table>
   
</div>

	
	<footer class="footer text-center ">
        <p>Made by <a href="index.php" target="_blank">Alex Desoe</a>Charleston</p>
    </footer>
  
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script type="text/javascript" src="main.js"></script>

</body>
</html>