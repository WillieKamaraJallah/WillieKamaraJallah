<?php 
	 include_once 'user.php';

	 // FORM VARIABLES
	 	$update = false;
		$user_id = " ";
		$username = " ";
		$email = " ";
		$address = " ";
		$role  = " ";

	// DATABASE CONNECTION
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="project";

    //  DELETE FROM DATABASE  
    if (isset($_GET['delete'])) {
	$pr_id = $_GET['delete'];
	$sql = "DELETE FROM user WHERE user_id=user_id";
	$_SESSION['message'] = "Record Deleted Successfully";
	$_SESSION['msg_type'] = "Deleted";

	// header("location: dashboard.php");
	
}
 //  EDIT FROM DATABASE 
    if (isset($_GET['edit'])) {
	$user_id = $_GET['edit'];
	$update = true;
	$sql = "SELECT * FROM user WHERE user_id=$user_id";
	if ($sql ==1) {
		$rows = $result->fetch_array();
		$user_id = $rows['user_id'];
		$username = $rows['username'];
		$email = $rows['email'];
		$address = $rows['address'];
		$role = $rows['role'];
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