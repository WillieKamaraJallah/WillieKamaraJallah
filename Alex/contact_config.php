<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="alex";

		if (isset($_POST['Submit'])) {
			$name = $_POST['name'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$message = $_POST['message'];
			 
			try{
		$connexion = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "INSERT INTO contact(name,email,phone,message) VALUES 
				('$name','$email','$phone','$message')";

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
			header("location: contact.php");
		}
		}	
?>