<?php
function check_status($a, $b, $c) {
    
    foreach (func_get_args() as $arg) :
        if (is_string($arg)){
            $name = $arg;
        }
        elseif (is_int($arg)){
            $age = $arg;
        }
        elseif (is_bool($arg)){
            $availability = $arg;
            if ($availability == 1){
                $availability = "Available";
            }
            elseif ($availability == 0){
                $availability = "Not Available";
            }
        }
    endforeach;
    echo '<br>';
    return "Hello $name, Your Age Is $age, You Are $availability For Hire";
}


  // Needed Output
  echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
  echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
