<?php
session_start();
include('config/connection.php');

if (isset($_POST['admin'])) {
	
	$username = $_POST['username'];
	$password = $_POST['password'];

 	$selectquery = "SELECT * FROM admin WHERE username = '$username'";
	$runquery = mysqli_query($conn, $selectquery);
	$admindata = mysqli_fetch_array($runquery);

	$getpassword = $admindata['password'];



	if (password_verify($password, $getpassword)) {

		$_SESSION['school_registration']['admin_id'] =  $admindata['admin_id'];
		$_SESSION['school_registration']['username'] =  $username;

		$success = base64_encode("You are successfully logged in");
		header("Location:dashboard.php?success=$success");
		exit;
	}

 else{
 	$error = base64_encode("You username or password is wrong.");
	header("Location:index.php?error=$error");
	exit;
	}
}

?>