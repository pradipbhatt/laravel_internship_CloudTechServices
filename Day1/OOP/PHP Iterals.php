<?php
// iterable allows functions to accept both array and objects that implements Traversable

function printItems(iterable $items){
    foreach ($items as $item){
        echo "$item";
    }
}

$fruits = ["Kera ","Seu   ","Mangoooooo<3   "];
printItems($fruits);
?>


<!-- Classes and Objects → Foundation of OOP
Constructor & Destructor → Automatic execution
Access Modifiers → Control visibility
Inheritance → Extend functionality
Constants & Static → Class-wide properties/methods
Abstract & Interface → Blueprint for other classes
Traits → Code reuse
Namespaces → Avoid conflicts
Iterables → Work with arrays & objects -->