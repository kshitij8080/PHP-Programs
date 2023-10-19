<?php

session_start();
$username=$_SESSION["uname"];
$password=$_SESSION["password"];

$name=$_POST["t1"];
$city=$_POST["t2"];
$pno=$_POST["t3"];

echo "<br>username:".$username;
echo "<br>password:".$password;
echo "<br>name:".$name;
echo "<br>city:".$city;
echo "<br>pno:".$pno;


?>

