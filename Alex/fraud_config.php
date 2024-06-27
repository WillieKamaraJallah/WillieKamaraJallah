<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="alex";

		if (isset($_POST['Submit'])) {
			$name = $_POST['name'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$student_name = $_POST['student_name'];
			$school = $_POST['school'];
			$class = $_POST['class'];
			$message = $_POST['message'];
			 
			try{
		$connexion = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "INSERT INTO fraud(name,address,email,student_name,school,message) VALUES 
				('$name','$address','$email','$student_name','$school','$class','$message')";

		$connexion->exec($query);
	}
	catch(PDOException $error) {
		echo "Error".$error->getMessage();
	}

			if ($query) {
			echo '<script type="text/javascript"> alert("Message Send Successfully")</script>';
			header("location: index.php");
		} else{
			echo '<script type="text/javascript"> alert("ERROR!! MESSAGE NOT SEND")</script>';
			header("location: fraud.php");
		}
		}	
?>