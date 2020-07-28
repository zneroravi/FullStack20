<?php 
//Function 

function disptext($fname, $lname){
	//code
	echo "My name is $fname $lname<br/>";

}

//disptext("pranav", "singh");


function dispsum(int $num1, float $num2){
	$num3 = $num1*$num2;
	//echo "The Total is: $num3 <br/>";
	return $num3;
}
//dispsum(2,5);
//echo dispsum(2,5.56);
//echo "<br/>";
//echo dispsum(4,67);

//$name = $_GET['fname'];

if (isset($_POST['submit1'])){

$name = $_POST['fname'];
$age = $_POST['age'];
echo $age;

echo "My name is:$name and age is: $age" ;
}

if (isset($_POST['submit2'])){

$n1 = $_POST['num1'];
$n2 = $_POST['num2'];

echo $n1+$n2;
}




 ?>



