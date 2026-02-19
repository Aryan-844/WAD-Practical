<?php
echo "Write a PHP script to demonstrate multiple inheritance using traits. <br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
trait A{
    function showA(){
        echo "Trait A<br>";
    }
}

trait B{
    function showB(){
        echo "Trait B";
    }
}

class Test{
    use A, B;
}

$obj = new Test();
$obj->showA();
$obj->showB();
?>
