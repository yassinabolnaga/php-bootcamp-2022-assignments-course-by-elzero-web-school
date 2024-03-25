<?php

<?php

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

// Write Your Code Here

$str[$num_one]= $let_one;
$str[(int)$num_two] = $let_two;

// Another Solution
// $str = str_replace(["%", "0"], ["z", "o"], $str);

echo $str; // Elzero
