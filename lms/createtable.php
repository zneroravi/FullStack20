<?php

$server   = "localhost";
$user = "root";
$pass = "";
$db = "lms";

$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
} 

$sql = "CREATE TABLE userlogin (regno VARCHAR(10) UNIQUE NOT NUll,name VARCHAR(30) NOT NUll,gender VARCHAR(10) NOT NUll,prof VARCHAR(10) NOT NUll, email VARCHAR(30) NOT NUll PRIMARY KEY, mobile VARCHAR(13) NOT NUll, password VARCHAR(30) NOT NUll);";

if ($sqlconn->query($sql) === TRUE) {
	echo "TABLE created";
} else {
	echo "error: ".$sqlconn->error;
}

$sqlconn->close();
?>