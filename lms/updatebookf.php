<?php

if (isset($_POST['submit'])) {

$bookid = $_POST["bookid"];
$book     = $_POST["book"];
$author      = $_POST["author"];
$publication      = $_POST["publication"];
$price      = $_POST["price"];
$year      = $_POST["year"];
$cat      = $_POST["cat"];

$server   = "localhost";
$user = "root";
$pass = "";
$db = "lms";



$sqlconn = new mysqli($server, $user, $pass, $db);

if ($sqlconn->connect_error){
  echo "error";
  die($sqlconn->connect_error);
} 

$sql = "UPDATE books SET  bookname='$book', author='$author', publication='$publication', price='$price', year='$year', cat='$cat' WHERE bookid='$bookid';";

if ($sqlconn->query($sql) === TRUE) {
  echo "data UPDATED";
  header('Refresh: 2; URL=book.php');
} else {
  echo "error: ".$sqlconn->error;
}


$sqlconn->close();
}
?>