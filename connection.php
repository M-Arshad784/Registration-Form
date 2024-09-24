<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set("Asia/Karachi");


global $conn;



$conn = mysqli_connect("localhost", "root", "", "school_registration");

if ($conn) {
	// echo "Successfully Connected";
}
else{
	echo "Connection Failed";
}



?>