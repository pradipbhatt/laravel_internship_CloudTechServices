<?php
// let's understand the     Abstract classes

// abstract class vaneko class which can't instantiated and must be extended by other classes.

abstract Class Animal{
    abstract function sound();
}

class Dog extends Animal{
    function sound(){
        echo"Barks\n";
    }
}

$dog = new Dog();
$dog->sound();

?>