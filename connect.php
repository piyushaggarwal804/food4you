<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "food";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

session_start();
function logged_in(){
	if(isset($_SESSION['user'])){
		
		return true;
	}
	else
	{return false;
		
	}
}




?>