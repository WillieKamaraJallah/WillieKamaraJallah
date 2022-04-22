<?php 
	 include_once 'product.php';

	 // FORM VARIABLES
	 	$update = false;
		$pr_id = " ";
		$name = " ";
		$quantity = " ";
		$description = " ";
		$price  = " ";
		$discount = " ";
		$date = " ";

	// DATABASE CONNECTION
    $server_name="localhost";
    $username="root";
    $password="";
    $database_name="project";

    //  DELETE FROM DATABASE  
    if (isset($_GET['delete'])) {
	$pr_id = $_GET['delete'];
	$sql = "DELETE FROM product WHERE pr_id=$pr_id";
	$_SESSION['message'] = "Record Deleted Successfully";
	$_SESSION['msg_type'] = "Deleted";

	// header("location: dashboard.php");
	
}
 //  EDIT FROM DATABASE 
    if (isset($_GET['edit'])) {
	$pr_id = $_GET['edit'];
	$update = true;
	$sql = "SELECT * FROM product WHERE pr_id=$pr_id";
	if ($sql ==1) {
		$rows = $result->fetch_array();
		$pr_id = $rows['pr_id'];
		$name = $rows['name'];
		$quantity = $rows['quantity'];
		$price = $rows['price'];
		$discount = $rows['discount'];
		$date = $rows['date'];
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