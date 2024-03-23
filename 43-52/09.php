<?php
$msg = "Greetings";

// Write Function Content Here
$greet = function($name) use($msg){
    return "$msg $name";
}; #متنساش semicolon

//by arrow function
// $greet = fn($name) => "$msg $name";

// Needed Output
echo $greet("Osama"); // Greetings
