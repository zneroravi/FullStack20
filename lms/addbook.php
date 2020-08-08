<?php

if (isset($_POST['submit'])) {

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

$sql = "INSERT INTO books (bookname, author, publication, price, year, cat) VALUES ('$book', '$author', '$publication', '$price', '$year', '$cat');";

if ($sqlconn->query($sql) === TRUE) {
  echo "data inserted";
  header('Refresh: 2; URL=book.php');
} else {
  echo "error: ".$sqlconn->error;
}


$sqlconn->close();
}
?>