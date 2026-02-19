<?php
echo " Write a PHP script to demonstrate inheritance and method overriding in PHP.<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
class ParentClass{
    function show(){
        echo "Parent Class";
    }
}

class ChildClass extends ParentClass{
    function show(){
        echo "Child Class";
    }
}

$obj = new ChildClass();
$obj->show();
?>
