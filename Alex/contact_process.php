<?php 
	 include_once 'message.php';

	 // FORM VARIABLES
	 	$update = false;
		$fname = " ";
		$lname = " ";
		$email = " ";
		$country = " ";
		$subject = " ";

	// DATABASE CONNECTION
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="alex";

    //  DELETE FROM DATABASE  
    if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$sql = "DELETE FROM contact WHERE id=$id";
	$_SESSION['message'] = "Record Deleted Successfully";
	$_SESSION['msg_type'] = "Deleted";

	// header("location: dashboard.php");
	
}
 //  EDIT FROM DATABASE 
//     if (isset($_GET['edit'])) {
// 	$id = $_GET['edit'];
// 	$update = true;
// 	$sql = "SELECT * FROM school WHERE id=$id";
// 	if ($sql ==1) {
// 		$rows = $result->fetch_array();
// 		$school_name = $rows['school_name'];
// 		$address = $rows['address'];
// 		$administrator = $rows['administrator'];
// 	}
// 	$_SESSION['message'] = "Record Edited Successfully";
// 	$_SESSION['msg_type'] = "Edit Completed";

// 	// header("location: dashboard.php");
// }
   
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