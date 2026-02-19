<?php
echo " Write a PHP script to demonstrate polymorphism using method overriding in PHP.<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
class Animal{
    function sound(){
        echo "Animal Sound";
    }
}

class Dog extends Animal{
    function sound(){
        echo "Dog Barks";
    }
}

$obj = new Dog();
$obj->sound();
?>
