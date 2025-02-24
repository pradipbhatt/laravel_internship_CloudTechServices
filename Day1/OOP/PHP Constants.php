<?php

class Car{
    const WHEELS = 4;

    // functions

    function showWheels(){
        //basically we can call the variable of the same class using the .self.variableName method
        echo "A car has  ".self::WHEELS."  number of wheels";
    }
}

$car =  new Car();
$car->showWheels();

?>