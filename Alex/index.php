<?php
		session_start();
		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $_SESSION['search'] = $_POST['search'];
      // $_SESSION['name'] = $_POST['name'];
        $_SESSION['school_name'] = $_POST['school_name'];
        // $_SESSION['term'] = $_POST['term'];
        // $_SESSION['Math'] = $_POST['Math'];
        // $_SESSION['English'] = $_POST['English'];
        // $_SESSION['Chemistry'] = $_POST['Chemistry'];
        // $_SESSION['Biology'] = $_POST['Biology'];
        // $_SESSION['History'] = $_POST['History'];
        // $_SESSION['Physic'] = $_POST['Physic'];
        // $_SESSION['Literature'] = $_POST['Literature'];
    }
        
    //     if($_SESSION['search']) {
    //         header('location: student.php');
    //     }
    // }

  $server_name="localhost";
	$username="root";
	$password="";
	$database_name="alex";



			try{
		$connexion = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $error) {
		echo "Error".$error->getMessage();
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Alex</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link type="text/css" rel="stylesheet" href="css/header.css" />
	<link type="text/css" rel="stylesheet" href="table.css" />
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
            <li><a href="fraud.php">Report Academic Fraud</a></li>
            <li><a href="login.php">Login</a></li>
            <li class="nav-iten">
                    <a href="register.php"><button class="btn btn-info" style="background-color:blue;"> SIGN UP</button></a>
                  </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
  <!-- End Nav Bar -->

<div id="booking" class="section">
   <div class="section-center">
	  <div class="container">
		 <div class="row">
		   <div class="booking-form">

		   								<!-- SEARCH FORM -->

			  <form method="POST" action="index.php" onsubmit="return ajsearch();">		
				 <div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<span class="form-label">Student Name</span>
								<input class="form-control" type="text" placeholder="Enter Student Name" name="search" id="name">
									</div>
								</div>
							<div class="col-md-6">
								<div class="form-group">
								 <span class="form-label">Name of School</span>
								<input class="form-control" name="school_name" id="student_name" type="text" placeholder="Enter School Name">
									</div>
								</div>
								<div class="col-md-4">
								<div class="form-group">
								 <span class="form-label">Student ID</span>
								<input class="form-control" name="Id" id="Id" type="text" placeholder="Enter Student ID">
									</div>
								</div>
							</div>
							<div class="row">
								<center><div class="col-md-6">
									<div class="form-btn">
											<button class="submit-btn" type="submit" name="name1" value="name1" id="name1">SEARCH</button>
									</div>
									</center>
								</div>
							</div>
						</form>
						<div id="results"></div>
					</div>
					<table>
  <thead>
    <tr>
      <th>Student Name</th>
      <th>Gender</th>
      <th>School Name</th>
      <th>Class</th>
      <th>Term</th>
      <th>Math</th>
      <th>English</th>
      <th>Chemistry</th>
      <th>Biology</th>
      <th>History</th>
      <th>Physic</th>
      <th>Literature</th>
    </tr>
  </thead>
  	<?php 

	if (isset($_POST['search'])) {
		
	$Id = $_POST['Id'];
	$search = $_POST['search'];
	$marks = "SELECT * FROM grades WHERE Id='$Id' AND name='$search'";
	$query_run = $connexion->query($marks);
	if ($marks > 0) {
	while ($rows = $query_run->fetch(PDO::FETCH_ASSOC)) {

		?>
		<tbody>
    <tr>
      <td data-column="First Name"><?php echo $rows['name']; ?></td>
      <td data-column="First Name"><?php echo $rows['sex']; ?></td>
      <td data-column="First Name"><?php echo $rows['school_name']; ?></td>
      <td data-column="First Name"><?php echo $rows['class']; ?></td>
      <td data-column="First Name"><?php echo $rows['term']; ?></td>
      <td data-column="First Name"><?php echo $rows['Math']; ?></td>
      <td data-column="First Name"><?php echo $rows['English']; ?></td>
      <td data-column="First Name"><?php echo $rows['Biology']; ?></td>
      <td data-column="First Name"><?php echo $rows['Chemistry']; ?></td>
      <td data-column="First Name"><?php echo $rows['History']; ?></td>
      <td data-column="First Name"><?php echo $rows['Physic']; ?></td>
      <td data-column="First Name"><?php echo $rows['Literature']; ?></td>
    </tr>

		<?php
		
	};
	
	} else{
		header("location: NoRecord.html");
	}
}

	 ?>
  
  </tbody>
</table>
				</div>
			</div>
		</div>
	</div>
	

</body>

</html>

<!-- SCRIPT TO COLLECT AND CONTROL SEARCH INPUT -->
<script>
function ajsearch () {
  //GET SEARCH TERM
  var data = new FormData();
  data.append("search", document.getElementById("search").value);
  data.append("ajax", 1);
 
  //AJAX SEARCH REQUEST
  fetch("search.php", { method:"POST", body:data })
  .then(res => res.json()).then((results) => {
    var wrapper = document.getElementById("results");
    if (results.length > 0) {
      wrapper.innerHTML = "";
      for (let res of results) {
        let line = document.createElement("div");
        line.innerHTML = `${res["name"]} - ${res["school_name"]} - ${res["Id"]}`;
        wrapper.appendChild(line);
      }
    } else { wrapper.innerHTML = "<?php echo "No Record Found" ?>"; }
  });
  return false;
};
</script>