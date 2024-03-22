<?php
// Write Function Content Here

function get_arguments(...$all){

    foreach ($all as $text){

        echo $text, " ";

    };
    
    echo '<br>';
}

// Needed Output
echo get_arguments("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School

echo get_arguments("I", "Love", "PHP"); // I Love PHP
