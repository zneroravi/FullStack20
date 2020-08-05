<?php

$name = "ravigoswami";
echo "$name<br/>";
$encode = md5($name);

echo "$encode<br/>";
echo sha1($name);
echo "<br/>";
echo hash('sha256', $name);
echo "<br/>";
echo strlen($encode);
?>