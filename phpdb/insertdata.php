<?php

$server   = "localhost";
$user = "root";
$pass = "";
$db = "fs20";

$regno = "104";
$name = "raman";
$mobile = "23232323";
$email = "raman@gmail.com";



$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
} 

$sql = "INSERT INTO userdata (regno, name, mobile, email) VALUES ('$regno', '$name', '$mobile', '$email');";

if ($sqlconn->query($sql) === TRUE) {
	echo "data inserted";
} else {
	echo "error: ".$sqlconn->error;
}


$sqlconn->close();
?>