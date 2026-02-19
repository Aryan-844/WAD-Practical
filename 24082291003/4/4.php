<?php
echo "Write a PHP script using switch-case to implement a simple menu-driven or calculator system <br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
$a = 20;
$b = 10;
$choice = "+";

switch($choice){
    case "+": echo $a + $b; break;
    case "-": echo $a - $b; break;
    case "*": echo $a * $b; break;
    case "/": echo $a / $b; break;
    default: echo "Invalid Choice";
}
?>
