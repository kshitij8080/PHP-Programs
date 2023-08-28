
<?php
{
$m1 = $_POST["t1"]; 
    $m2 = $_POST["t2"];
    $m3 = $_POST["t3"];
    $m4 = $_POST["t4"]; 
    $m5 = $_POST["t5"];
    $t = $m1 + $m2 + $m3 + $m4 + $m5;
    $p = $t / 5;
    echo ("<br> Total marks = " . $t);  
echo ("<br> Percentage=".$p);
}
?>
