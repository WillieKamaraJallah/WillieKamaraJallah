<?php

	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="project";

		if (isset($_POST['submit'])) {
			$username = $_POST['username'];
			$email = $_POST['email'];
			$address = $_POST['address'];
			$password =$_POST['password'];
			$role = $_POST['role'];
			//$file = addcslashes(file_get_contents($_FILES['picture']["tmp_name"]));
			 $check = getimagesize($_FILES["picture"]["tmp_name"]);

			 	if($check != false){
       				 $image = $_FILES['picture']['tmp_name'];
       				 $image_name = $_FILES['picture']['name'];
       				 //$imgContent = addslashes(file_get_contents($image));

       				 //create a directory
       				 $path = "uploads/images/";

       				 if (!is_dir($path)) {
       				 	// code...
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
		$query = "INSERT INTO user (username,email,address, password,role,picture) VALUES ('$username','$email','$address','$password','$role','$image_name')";

		$connexion->exec($query);
	}
	catch(PDOException $error) {
		echo "Error".$error->getMessage();
	}

			if ($query) {
			echo '<script type="text/javascript"> alert("Product Added Successfully")</script>';
			header("location: dashboard.php");
		} else{
			echo '<script type="text/javascript"> alert("ERROR!! PRODUCT ADDED</script>';
			header("location: add_admin.php");
		}
		}	
	}
?>


