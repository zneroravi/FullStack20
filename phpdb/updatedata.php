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

$sql = "UPDATE userdata SET name='Ravi Goswami' WHERE regno=101;";

if ($sqlconn->query($sql) === TRUE) {
	echo "data updated";
} else {
	echo "error: ".$sqlconn->error;
}


$sqlconn->close();
?>