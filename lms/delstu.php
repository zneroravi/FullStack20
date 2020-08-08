<?php

$email = $_GET["email"];

//echo $email;
$server   = "localhost";
$user = "root";
$pass = "";
$db = "lms";

$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
} 

$sql = "DELETE FROM userlogin WHERE email='$email';";

if ($sqlconn->query($sql) === TRUE) {
	echo "data Deleted";
	header("Refresh:2, URL=stuview.php");
} else {
	echo "error: ".$sqlconn->error;
}


// $sqlconn->close();
?>