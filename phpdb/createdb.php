<?php

$server   = "localhost";
$user = "root";
$pass = "";

$sqlconn = new mysqli($server, $user, $pass);

if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
} 

$sql = "CREATE DATABASE fs2020";

if ($sqlconn->query($sql) === TRUE) {
	echo "DATABASE created";
} else {
	echo "error: ".$sqlconn->error;
}

$sqlconn->close();
?>