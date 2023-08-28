

<?php

$l=$_POST["t1"];
$b=$_POST["t2"];
$h=$_POST["t3"];
$s=2*($l*$b+$l*$h+$b*$h);
$v=($l*$b*$h);

echo "<br>surface area=".$s;
echo "<br>volume of cuboid=".$v;

?>