<?php

if (isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$passw = $_POST['pass'];

}

$server   = "localhost";
$user = "root";
$pass = "";
$db = "fs20";


$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
} 

$sql = "INSERT INTO userlogin (name, email, mobile, pass) VALUES ('$name', '$email', '$mobile', '$passw');";

if ($sqlconn->query($sql) === TRUE) {
	echo "data inserted";
} else {
	echo "error: ".$sqlconn->error;
}


$sqlconn->close();
?>