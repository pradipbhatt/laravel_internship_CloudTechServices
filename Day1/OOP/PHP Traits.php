<?php
// Traits allow code reuse across multiple classes
trait Logger{
    function log($msg){
        echo "Logging  : $msg \n";
    }
}

class User{
    use Logger;
}

$user = new User();
$user->log("User Logged in hai no need to worry <3 \n ");
?>