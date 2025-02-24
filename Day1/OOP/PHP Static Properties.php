<?php
// Static properties are shared across all instances of a class
class Counter{
    public static $count = 0 ;

    public static function increment(){
        self::$count++;
    }
}


Counter::increment();  //count ko value 1 le badhne vayo

// aab hami intermediate value of the count find garchau

echo "The intermediate value of the Count is = ".Counter::$count."\n";

Counter::increment();  //count ko value 1 le badhne vayo total 2 hune vayo

echo "The final value of the counter is = ".Counter::$count."\n";
?>