<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="alex";

		if (isset($_POST['submit'])) {
			$school_name = $_POST['school_name'];
			$address = $_POST['address'];
			$administrator = $_POST['administrator'];
			$check = getimagesize($_FILES["picture"]["tmp_name"]);

			 	if($check != false){
       				 $image = $_FILES['picture']['tmp_name'];
       				 $image_name = $_FILES['picture']['name'];
       				 //$imgContent = addslashes(file_get_contents($image));

       				 //create a directory
       				 $path = "uploads/images/";

       				 if (!is_dir($path)) {
       				 	mkdir($path, 0776, true);
       				 }

       				 // "uploads/images/people.jpg";
       				 //upload the file 
       				 $upload = move_uploaded_file($image, $path.$image_name);

       				 if ($upload != true) {
       				 	// code...
       				 	echo "Error occur while uploading your image file";
       				 	exit();
       				 }

			try{
		$connexion = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$query = "INSERT INTO school(school_name,address,administrator,picture) VALUES 
				('$school_name','$address','$administrator','$image_name')";

		$connexion->exec($query);
	}
	catch(PDOException $error) {
		echo "Error".$error->getMessage();
	}

			if ($query) {
			echo '<script type="text/javascript"> alert("School Added Successfully")</script>';
			header("location: admin.php");
		} else{
			echo '<script type="text/javascript"> alert("ERROR!! SCHOOL NOT ADDED")</script>';
			header("location: new_school.php");
		}
		}	
	}
?>


