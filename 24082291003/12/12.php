<?php
echo " Write a PHP script to demonstrate the use of constructor and destructor in PHP<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
class Test{
    function __construct(){
        echo "Constructor Called<br>";
    }

    function __destruct(){
        echo "Destructor Called";
    }
}

$obj = new Test();
?>
