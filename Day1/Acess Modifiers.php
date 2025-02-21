<?php
// as we know we have three modifiers
// public-->accessible everywhere
// private-->accessible only within the class
// Protected->Accessible within the class and derived class
// let's understand this concept by example
class Car{
    public $brand = "BMW";
    private $price = 1000;
    protected $engine = "v8";

    function showPrice(){
        return $this->price;
    }
}

$car1 = new Car();
echo "The brand name is = ".$car1->brand;
echo"\n";
// echo $car1->price;  Uncaught Error: Cannot access private property Car::$price
echo "The price is = ".$car1->showPrice();
echo "\n";
?>