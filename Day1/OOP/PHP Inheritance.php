<?php
// Php inheritance vaneko euta class le inherit the properties and methods from another class using the "extends" keyword.

class Vehicle{
    public $brand = "Unknown";

    function honk(){
        echo "Beep ! beep !\n";
    }
}

// making abother class let's go
class Car extends Vehicle{
   function setBrand($brand){
    $this->brand = $brand;
   }
}

$car = new Car();    //first ma hamile car name ko obj banayau Car class ko then,
$car->setBrand("Hero honda brand");  //setBrand fuction call garyau which is the function of the Car class still it use the brand of the Vehicle class

echo "Brand of my car is = ".$car->brand." \t \n";
$car->honk();  //Car ko object le Vehicle class ko data access use garyo because of the extends
?>