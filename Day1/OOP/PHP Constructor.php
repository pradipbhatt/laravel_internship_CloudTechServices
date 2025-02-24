<?php
// Php constructor is a special function that is called automatically when an object is created

class Car{
    // properties
    public $brand;
    public $color;

    // methods or functions
    function __construct($brand,$color){
        $this->brand=$brand;
        $this->color=$color;
    }

    function display(){
        echo "Brand: $this->brand,
        Color:$this->color\n";
    }
}

$mero_car = new Car("BMW","Red");
$mero_car->display();
?>