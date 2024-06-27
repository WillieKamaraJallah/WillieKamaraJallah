<?php 
	 include_once 'school_list.php';

	 // FORM VARIABLES
	 	$update = false;
		$school_name = " ";
		$address = " ";
		$administrator = " ";

	// DATABASE CONNECTION
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="alex";

    //  DELETE FROM DATABASE  
    if (isset($_GET['delete'])) {
	$sch_id = $_GET['delete'];
	$sql = "DELETE FROM school WHERE sch_id=$sch_id";
	$_SESSION['message'] = "Record Deleted Successfully";
	$_SESSION['msg_type'] = "Deleted";

	// header("location: dashboard.php");
	
}
 //  EDIT FROM DATABASE 
    if (isset($_GET['edit'])) {
	$sch_id = $_GET['edit'];
	$update = true;
	$sql = "SELECT * FROM school WHERE sch_id=$sch_id";
	if ($sql ==1) {
		$rows = $result->fetch_array();
		$school_name = $rows['school_name'];
		$address = $rows['address'];
		$administrator = $rows['administrator'];
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