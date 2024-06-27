<?php 
	 include_once 'student_record.php';

	 // FORM VARIABLES
	 	$update = false;
		$name = " ";
		$school_name = " ";
		$Class = " ";

	// DATABASE CONNECTION
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="alex";

    //  DELETE FROM DATABASE  
    if (isset($_GET['delete'])) {
	$stu_id = $_GET['delete'];
	$sql = "DELETE FROM student WHERE stu_id=$stu_id";
	$_SESSION['message'] = "Record Deleted Successfully";
	$_SESSION['msg_type'] = "Deleted";

	// header("location: dashboard.php");
	
}
 //  EDIT FROM DATABASE 
    if (isset($_GET['edit'])) {
	$stu_id = $_GET['edit'];
	$update = true;
	$sql = "SELECT * FROM student WHERE stu_id=$stu_id";
	if ($sql ==1) {
		$rows = $result->fetch_array();
		$name = $rows['name'];
		$school_name = $rows['school_name'];
		$Class = $rows['Class'];
	}
	$_SESSION['message'] = "Record Edited Successfully";
	$_SESSION['msg_type'] = "Edit Completed";

	// header("location: dashboard.php");
	
}
   
  try{
   $pdo = new PDO("mysql:host=$server_name; dbname=$database_name;", $username, $password );
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Error");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }
  
// Delete Function



 ?>