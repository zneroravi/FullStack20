<?php

$server   = "localhost";
$user = "root";
$pass = "";
$db = "fs20";

$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
} 

$sql = "DELETE FROM userdata WHERE regno=103;";

if ($sqlconn->query($sql) === TRUE) {
	echo "data Deleted";
} else {
	echo "error: ".$sqlconn->error;
}


$sqlconn->close();
?>