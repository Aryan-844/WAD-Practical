<?php
echo " Write a PHP script to demonstrate basic string functions such as strlen(), substr(), trim(), and strpos().<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
$str = "  Hello PHP World  ";

echo strlen($str) . "<br>";
echo substr($str, 2, 5) . "<br>";
echo trim($str) . "<br>";
echo strpos($str, "PHP");
?>
