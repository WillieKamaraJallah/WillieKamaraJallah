<?php

	    $name = $_POST['name'];
		$class = $_POST['class'];
		$address = $_POST['address'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$Subname = $_POST['Subname'];

	// Connect Database

	$conn = new mysqli('localhost','root', '','student');
	if ($conn->connect_error)
		{
			die('connection Failed :'.$conn->connection_error);
		}else{
			$stmp = $conn->prepare("INSERT INTO `teacher` (`name`, `class`, `address`, `email`, `subject`, `Subname`) VALUES (?, ?, ?, ?, ?, ?)");
			$stmp->bind_param($name, $class, $address, $email, $subject, $Subname);
			$stmp->execute();
			$smtp->store_result();
			echo "Submission Success";
			$stmp->close();
			$conn->close();

		}

?>