<?php

// Write Function Content Here

function greeting($name, $gender="") {
    if ($gender == "Male"){
        return "Hello Mr $name";
    }
    elseif ($gender == "Female"){
        return "Hello Miss $name";
    }
    else {
        return "Hello $name";
    }
}

echo greeting("Sameh");

// Needed Output
// echo greeting("Osama", "Male"); // Hello Mr Osama
// echo greeting("Eman", "Female"); // Hello Miss Eman
// echo greeting("Sameh"); // Hello Sameh
