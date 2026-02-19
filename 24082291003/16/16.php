<?php
echo " Write a PHP script to demonstrate encapsulation using private data members and public getter and setter methods.
<br>";
echo "Name : Aryan Barot <br>";
echo "Enrollment Number : 24082291003 <br>";
echo "------------------------------------------<br><br>";
class Person{
    private $name;

    function setName($n){
        $this->name = $n;
    }

    function getName(){
        return $this->name;
    }
}

$p = new Person();
$p->setName("Aryan");
echo $p->getName();
?>
