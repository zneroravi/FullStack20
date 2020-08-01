<?php

$server   = "localhost";
$user = "root";
$pass = "";

$sqlconn = new mysqli($server, $user, $pass);

if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
} 

$sql = "DROP DATABASE fs2020";

if ($sqlconn->query($sql) === TRUE) {
	echo "DATABASE DELETED";
} else {
	echo "error: ".$sqlconn->error;
}

$sqlconn->close();
?>