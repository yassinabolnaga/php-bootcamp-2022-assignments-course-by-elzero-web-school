<?php 
$name = "elzero";
$$name = "Web";
$a = $$name;

echo ${"$name"}; #1
echo '<br>';
echo $$name; #2
echo '<br>';
echo $elzero; #3
echo '<br>';
echo "${elzero}"; #4
echo '<br>';
echo "$a"; #5
