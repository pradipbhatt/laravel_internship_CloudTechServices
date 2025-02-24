<?php
// What is OOP  
//   OOP means programming where we use the Objects and Classes 
//    Procedural programming is about writing procedures or functions that perform operations on the data, while object-oriented programming is about creating objects that contain both data and functions.
 
//    Why OOP ? 

//    OOP is faster and easier to execute
// OOP provides a clear structure for the programs
// OOP helps to keep the PHP code DRY "Don't Repeat Yourself", and makes the code easier to maintain, modify and debug
// OOP makes it possible to create full reusable applications with less code and shorter development time 


//  Let's understand the class and objects by own examples
//  hmm let's say Fruit is the class and the Apple,Banana,Mango are the Objects 

//   As Conclusion, Class vaneko objects haru ko lage template hune vayo ani Objects are the instance of the Class 

//   Class is defined by class keyword, followed by the name of the class 
//  Example ma let's decleare the Fruit class with two objects $name and $color properties with two methods set_name() ani get_name() for setting and getting the $name property 



class Fruit{
    // Properties
    public $name;
    public $color;

    // Methods

    // first method set_name($name)
    function set_name($name){
        $this->name = $name;
    }
    // second method get_name()
    function get_name(){
        return $this->name;
    }
}


//  Let's deine the Objects 
//   classes are just nothing without objects,we  create multiple objects from a class and each class has the properties and methods defined in the class but they have diffrent values 

//   let's create the objects now then 
 $apple = new Fruit();
 $banana = new Fruit();
 $apple->set_name('Apple');
 $banana->set_name('Banana');

//  echo $apple->get_name();
//  echo "<br>";
//  echo $banana->get_name();
// this way is used in the browser kina ki <br> is the browser function

// so terminal ma gap dina we can use \n
echo $apple->get_name() . "\n\n";
echo $banana->get_name() . "\n\n";


?>