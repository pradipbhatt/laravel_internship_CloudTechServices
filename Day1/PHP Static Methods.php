<?php
class Math{
    public static function add($a,$b){
        return $a+$b;
    }
}


echo "My roll nbr of the class is = ".Math::add(10,23)."\n";
?>

<!-- static Methods belong to the class rather than an instance -->