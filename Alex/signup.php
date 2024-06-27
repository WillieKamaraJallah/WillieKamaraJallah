<?php 

		//include_once 'config.php';

	// REGISTER USER
if (isset($_POST['register'])) {
// receive all input values from the form
		$username = $_POST['username'];
		$school_name = $_POST['school_name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$password_1 = $_POST['password_1'];
		$sch_address = $_POST['sch_address'];
		$db = mysqli_connect('localhost', 'root', '', 'alex');


if (empty($username)) { array_push($errors, "Username is required"); }
if (empty($email)) { array_push($errors, "Email is required"); }
if (empty($password_1)) { array_push($errors, "Password is required"); }
if ($password != $password) {
array_push($errors, "The two passwords do not match");
}
// Check If Username or Email Already Exist
$user_check_query = 'SELECT * FROM user WHERE username="$username" OR email="$email" LIMIT 1';
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user) { // if user exists
if ($user['username'] === $username) {
//array_push($errors, "Username already exists");
echo "email already exists";
}
if ($user['email'] === $email) {
//array_push($errors, "email already exists");
echo "email already exists";
}
}
//ins
// Register user if there are no errors in the form
if ($count == 0) {
$password = md5($password);//encrypt the password before saving in the database
echo $password ;
$query = "INSERT INTO user(username, school_name, email, password, sch_address)
VALUES('$username', '$school_name', '$email', '$password', '$sch_address')";
mysqli_query($db, $query);
$_SESSION['username'] = $username;
$_SESSION['success'] = "Registration Success";
header('location: login.php');
}
}

 ?>