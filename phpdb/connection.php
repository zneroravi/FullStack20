<?php

$server   = "localhost";
$user = "root";
$pass = "";

$sqlconn = new mysqli($server, $user, $pass);


if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
}



echo "connection done";

//$sqlconn -> close();
?>