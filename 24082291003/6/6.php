<?php
echo " Write a PHP script to demonstrate the use of while, do-while and foreach loops.<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
$i = 1;
while($i <= 5){
    echo $i;
    $i++;
}
echo "<br>";

$j = 1;
do{
    echo $j;
    $j++;
}while($j <= 5);

echo "<br>";

$arr = [10,20,30];
foreach($arr as $value){
    echo $value;
}
?>
