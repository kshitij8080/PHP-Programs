<?php

$a=array(10,20,30,40);
$b=array(10,22,30,44);
$c=array_unique(array_merge($a,$b));
echo "Unique Elements=";
print_r($c);

shuffle($a);
 echo "<br> Random elements=";
 print_r($a);
?>