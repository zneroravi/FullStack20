<?php

if (isset($_POST['submit'])){
$email = $_POST['email'];
$passw = $_POST['pass'];

}

$server   = "localhost";
$user = "root";
$pass = "";
$db = "lms";


$sqlconn = new mysqli($server, $user, $pass, $db);

$sql = "SELECT * FROM userlogin WHERE email = '$email';";

//$sql = "SELECT regno, name, mobile, email FROM userdata WHERE regno='102';";

$data = $sqlconn->query($sql);


if ($data->num_rows>0) {
	while ($row = $data->fetch_assoc()) {
		if ($passw ==  $row["password"]) {
		 	echo "password matched";
		 	echo $email;
		 	session_start();
		 	$_SESSION['email'] = $email;

		 	 header('Refresh: 1; URL=dashstu.php');
		 	 		 }
		 else echo "wrong password";
	}

} else {
	echo "error: ".$sqlconn->error;
}


$sqlconn->close();
?>