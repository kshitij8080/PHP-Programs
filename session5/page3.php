<?php

session_start();
$name=$_SESSION["name"];
$address=$_SESSION["address"];
$pno=$_SESSION["pno"];

$Pname=$_POST["1"];
$qty=$_POST["2"];
$rate=$_POST["3"];

$Pn=explode(" ",$Pname);
print_r($pn);

?>