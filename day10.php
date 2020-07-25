<?php 

$x = 10;
$y = 400;
$z = 70;

// +, -, *, /, %, **

// $c = $a % $b;

// $d = $a**$b;
// echo $d;

if ($x > $y && $x>$z) {
	echo "$x is greater";
} elseif ( $y > $x && $y > $z) {
	echo "$y is greater";
} 
else{
	echo "$z is greater ";
	}
echo "<br>";

$num =4;
switch ($num) {
	case '1':
		echo "It`s Monday";
		break;
	case '2':
		echo "It`s Tuesday";
		break;
	case '3':
		echo "It`s wednesday";
		break;
	default:
		echo "you selected wrong day";
		break;
}

echo "<br>";

// for loop
 for ($i=0; $i < 5; $i++) { 
 	echo "$i";
 }


 ?>





