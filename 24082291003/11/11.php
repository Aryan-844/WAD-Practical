<?php
echo " Write a PHP script to demonstrate the concept of class and object in PHP.<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
class Student{
    public $name;
    public $age;

    function show(){
        echo $this->name . " " . $this->age;
    }
}

$s = new Student();
$s->name = "Aryan";
$s->age = 20;
$s->show();
?>
