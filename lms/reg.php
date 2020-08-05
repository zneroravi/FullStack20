<?php

if (isset($_POST['submit'])){
$regno = $_POST['regno'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$passw = $_POST['pass'];
$gender = $_POST['gender'];
$prof = $_POST['prof'];

//$passw = md5($passw);
}

$server   = "localhost";
$user = "root";
$pass = "";
$db = "lms";


$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
	echo "error";
	die($sqlconn->connect_error);
} 

$sql = "INSERT INTO userlogin (regno, name, gender, prof, email, mobile, password) VALUES ('$regno', '$name', '$gender', '$prof', '$email', '$mobile', '$passw');";

if ($sqlconn->query($sql) === TRUE) {
	echo "data inserted";
	header('Refresh: 5; URL=login.html');
	} 
	else {
	echo "error: ".$sqlconn->error;
}


$sqlconn->close();
?>