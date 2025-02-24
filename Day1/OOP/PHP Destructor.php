
<?php
// <!-- Php destructor vaneko tyo special function jo called huncha when an object is destroyed or goes out of scope -->

class Car{


    // defining the constructor
function __construct(){
        echo "Car is created !\n";
    }

    // defining the destructor
function __destruct(){
    echo "Car is destroyed \n";
  }
}

$car1 = new Car();
?>