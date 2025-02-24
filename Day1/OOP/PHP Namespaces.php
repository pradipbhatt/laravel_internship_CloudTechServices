<?php
namespace Animals;

// namespace kina use garchau vane it helps us to avoid the name conflicts between classes

class Cat{
    // first define the functions
    function cry(){
        echo "Meow Meow \n";
    }
}

$cat = new Cat;
$cat->cry();

?>