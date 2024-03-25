<?php

$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];

echo ucfirst(substr_replace(strtolower(implode($chars)), '', 1, 2));

// Output
// "Elzero"
