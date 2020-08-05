
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
$sql = "SELECT * FROM userdata;";

//$sql = "SELECT regno, name, mobile, email FROM userdata WHERE regno='102';";

$data = $sqlconn->query($sql);


if ($data->num_rows>5) {
	while ($row = $data->fetch_assoc()) {
		echo $row["email"]." ".$row["regno"]." ".$row["name"]." ".$row["mobile"]."<br/>";

	}

} else {
	echo "error: ".$sqlconn->error;
}

$sqlconn->close();
?>
