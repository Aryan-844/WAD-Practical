<?php
echo " Write a PHP script to demonstrate decision making in PHP using if–else and switch–case statements.<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
$num = 10;

if($num % 2 == 0){
    echo "Even Number<br>";
}else{
    echo "Odd Number<br>";
}

$day = 2;

switch($day){
    case 1: echo "Monday"; break;
    case 2: echo "Tuesday"; break;
    case 3: echo "Wednesday"; break;
    default: echo "Invalid";
}
?>
