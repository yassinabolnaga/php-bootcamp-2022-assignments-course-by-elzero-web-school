<?php
// Write Function Content Here

function calculate($num1, $num2, $operator = ""){

    foreach (func_get_args() as $arg) :

        if ($arg == "a"){
            $result = $num1 + $num2;
        }
        
        elseif ($arg == "s" || $arg == "subtract"){
            $result = $num1 - $num2;
        }
        
        elseif ($arg == "m" || $arg == "multiply"){
            $result = $num1 * $num2;
        }
        else {
            $result = $num1 + $num2;
        }

    endforeach;
    echo'<br>';
    return $result;
}

// Needed Output
echo calculate(10, 20); // 30
echo calculate(10, 20, "a"); // 30
echo calculate(10, 20, "s"); // -10
echo calculate(10, 20, "subtract"); // -10
echo calculate(10, 20, "multiply"); // 200
echo calculate(10, 20, "m"); // 200
