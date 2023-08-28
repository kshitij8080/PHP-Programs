

<?php

$r=$_POST["t1"];
$s=$_POST["t2"];
$l=$_POST["t3"];
$b=$_POST["t4"];

$a=3.14*$r*$r;
echo "<br>area of circle=".$a;

$b=$s*$s;
echo "<br>area of square=".$b;

$c=$l*$b;
echo "<br>area of rectangle=".$c;

?>