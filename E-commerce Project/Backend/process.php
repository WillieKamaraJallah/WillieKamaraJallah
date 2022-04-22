<?php 
	 include_once 'order.php';

	 // FORM VARIABLES
	 	$update = false;
		$order_id = " ";
		$pr_id = " ";
		$trans_id = " ";
		$cat_id = " ";
		$user_id  = " ";

	// DATABASE CONNECTION
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="project";

    //  DELETE FROM DATABASE  
    if (isset($_GET['delete'])) {
	$order_id = $_GET['delete'];
	$sql = "DELETE FROM order WHERE order_id=$order_id";
	$_SESSION['message'] = "Record Deleted Successfully";
	$_SESSION['msg_type'] = "Deleted";

	// header("location: dashboard.php");
	
}
 //  EDIT FROM DATABASE 
    if (isset($_GET['edit'])) {
	$order_id = $_GET['edit'];
	$update = true;
	$sql = "SELECT * FROM orders WHERE order_id=$order_id";
	if ($sql ==1) {
		$rows = $result->fetch_array();
		$pr_id = $rows['pr_id'];
		$trans_id = $rows['trans_id'];
		$cat_id = $rows['cat_id'];
		$user_id = $rows['user_id'];
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