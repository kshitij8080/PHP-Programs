
<?php

$a=$_POST["t1"];
$b=$_POST["t2"];

echo "Before swapping: a=$a,b=$b<br>";

$t=$a;
$a=$b;
$b=$t;

echo "after swapping: a=$a,b=$b";

?>