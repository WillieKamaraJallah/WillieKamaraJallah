<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="james";


		$institute = $_POST['institute'];
		$address = $_POST['address'];
		$about = $_POST['about'];
		$link = $_POST['link'];
		$eligibility = $_POST['eligibility'];
		$deadline = $_POST['deadline'];
		$type = $_POST['type'];
		$level = $_POST['level'];

	try{
		$connexion = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "INSERT INTO scholarship(institute,address,about,eligibility,deadline,type,level) VALUES 
('$institute','$address','$about','$link','$eligibility', '$deadline', '$type','$level')";
$connexion->exec($query);
	}
	catch(PDOException $error) {
		echo "Error".$error->getMessage();
	}

?>