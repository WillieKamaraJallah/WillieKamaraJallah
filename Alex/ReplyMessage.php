<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="alex";

		if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];

			try{
		$connexion = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "INSERT INTO reply(name,email,message) VALUES 
				('$name','$email','$message')";

		$connexion->exec($query);
	}
	catch(PDOException $error) {
		echo "Error".$error->getMessage();
	}

		if ($query) {
			echo '<script type="text/javascript"> alert("School Added Successfully")</script>';
			header("location: fraud_message.php");
		} else{
			echo '<script type="text/javascript"> alert("ERROR!! SCHOOL NOT ADDED")</script>';
			header("location: fraud_message.php");
		}

		}
?>


