<?php

		include_once "error.php";

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="alex";

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$sex = $_POST['sex'];
			$school_name = $_POST['school_name'];
			$class = $_POST['class'];
			$term = $_POST['term'];
			$Math = $_POST['Math'];
			$English = $_POST['English'];
			$Chemistry = $_POST['Chemistry'];
			$Biology = $_POST['Biology'];
			$History = $_POST['History'];
			$Physic = $_POST['Physic'];
			$Literature = $_POST['Literature'];

			try{
		$connexion = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "INSERT INTO grades(name,sex,school_name,class,term,Math,English,Chemistry,Biology,History,Physic,Literature) VALUES 
				('$name','$sex','$school_name','$class','$term','$Math','$English','$Chemistry', '$Biology', '$History', '$Physic', '$Literature')";

		$connexion->exec($query);
	}
	catch(PDOException $error) {
		echo "Error".$error->getMessage();
	}

			if ($query) {
			echo '<script type="text/javascript"> alert("Grades Added Successfully")</script>';
			header("location: admin.php");
		} else{
			echo '<script type="text/javascript"> alert("ERROR!! GRADES NOT ADDED")</script>';
			header("location: add_grades.php");
		}
		}	
	
?>


