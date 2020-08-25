<?php

$server   = "localhost";
$user = "root";
$pass = "";
$db = "lms";


$sqlconn = new mysqli($server, $user, $pass, $db);

$sql = "SELECT * FROM userlogin WHERE email = '$email';";
$data = $sqlconn->query($sql);
if ($data->num_rows>0) {
  while ($row = $data->fetch_assoc()) {
    $name = $row['name'];
    $regno = $row['regno'];
    $gender = $row['gender'];
    $prof = $row['prof'];
    $mobile = $row['mobile'];
    $password = $row['password'];
   
}
}



?>