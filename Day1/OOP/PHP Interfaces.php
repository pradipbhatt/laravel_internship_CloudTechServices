<?php
// let's understand the php interfaces

// interface defines methods that must be implemented in the classes

interface Animal{
    function sound();
}

class Dog implements Animal{
    function sound(){
        echo "Wooooooooooooof ! \n";
    }
}

$dog = new Dog;

$dog->sound();

?>