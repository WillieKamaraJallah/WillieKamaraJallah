<?php

		//include_once "error.php";
		include_once "index.php";

		// START DATABASE CONNECTION

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

	// END DATABASE CONNECTION

// RUN SEARCH QUERY FROM DATABASE
$stmt = $connexion->prepare("SELECT * FROM `grades` WHERE `name` LIKE ? OR `Id` LIKE ?");
$stmt->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%"]);
$results = $stmt->fetchAll();
if (isset($_POST["ajax"])) { echo json_encode($results); }



// Display All Search Result from Database
// if (isset($_POST['search'])) {
// 	$Id = $_POST['Id'];
// 	$marks = "SELECT * FROM grades WHERE Id='$Id'";
// 	$query_run = $connexion->query($marks);
// 	while ($rows = $query_run->fetch(PDO::FETCH_ASSOC)) {
// 		echo $row['Math'];
// 	}
// }
