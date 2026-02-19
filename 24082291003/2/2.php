<?php
echo " Write a PHP script to demonstrate the use of constants and arithmetic / logical operators in PHP.<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
define("PI", 3.14);

$a = 10;
$b = 5;

echo PI . "<br>";
echo ($a + $b) . "<br>";
echo ($a - $b) . "<br>";
echo ($a * $b) . "<br>";
echo ($a / $b) . "<br>";

$x = true;
$y = false;

var_dump($x && $y);
echo "<br>";
var_dump($x || $y);
?>
