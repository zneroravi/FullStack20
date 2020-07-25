<?php 
// while loop
$ab = 0 ;
 while ($ab <5) {
 	//echo "number is $ab <br/>";
 	$ab++;
 }

//do while loop
 $bc=1;
do {
	echo "number is $bc <br/>";
	$bc++;
} while ($bc<5);


//foreach




//Indexed Array
$name = array("ravi", "pranav", "mohit");

//echo $name[1];

foreach ($name as $val) {
	echo "$val <br/>";
}


//Asociative Array
echo "<br/>";

$class = array("ravi"=>"Database", "pranav"=>"c++", "mohit"=>"python");
echo $class['ravi'];

echo "<br/>";

$reg = array("1"=>"Ravi", "2"=>"pranav", "3"=>"mohit");
//echo $reg['3'];
//(arrayname as $key => $value )
foreach ($reg as $num1 => $val1) {
	echo "$num1 <br/> $val1 <br/>";
}


echo "<br/>";
//Multidimentional array
/*
[1, 2, 3]
[00, 01, 02]

[4, 5, 6]
[10, 11, 12]
*/
$aname = "Ravi";
$areg = 1;
$asub = "Database";

$data = array(
		array($aname, $areg, $asub),

		array("pranav", 2, "C++"),
		array("mohit", 3, "python"),
		array("priyanka", 4, "UI")
);

echo "name:".$data[0][0]." ".$data[0][1]." ".$data[0][2];



?>








