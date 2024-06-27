<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="alex";

	try{
		$connexion = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//$query = "INSERT INTO students(name,address,class,school,teacher) VALUES 
//('$name','$address','$class','$school','$teacher')";
//$connexion->exec($query);
	}
	catch(PDOException $error) {
		echo "Error".$error->getMessage();
	}

?>

