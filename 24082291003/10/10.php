<?php
echo " Write a PHP script to create associative arrays and apply sorting functions such as asort()and ksort().<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
$marks = ["Math"=>80, "English"=>70, "Science"=>90];

asort($marks);
print_r($marks);
echo "<br>";

ksort($marks);
print_r($marks);
?>
