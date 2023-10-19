<?php

session_start();
$Name=$_SESSION["name"];
$Class=$_SESSION["class"];

$Phy=$_POST["1"];
$Bio=$_POST["2"];
$Chem=$_POST["3"];
$Math=$_POST["4"];
$Marathi=$_POST["5"];
$Eng=$_POST["6"];

$t=$Phy+$Bio+$Chem+$Math+$Marathi+$Eng;
$p=$t/6;

echo "<table border='1' width='50%'>";
echo "<tr><td>NAME:<td>$Name</tr>";
echo "<tr> <td>Class <td>$Class </tr>";
echo "</table>";

echo "<table border='1' width='50%'>";
echo "<tr> <th>Subjects <th>Marks </tr>";
echo "<tr> <td>Phy <td>$Phy</tr>";
echo "<tr> <td>Bio <td>$Bio</tr>";
echo "<tr> <td>Chem <td>$Chem</tr>";
echo "<tr> <td>Math <td>$Math</tr>";
echo "<tr> <td>Marathi <td>$Marathi</tr>";
echo "<tr> <td>Eng <td>$Eng</tr>";
echo "</table>";

echo "<br> Total Marks Obtained:".$t;
echo "<br> Percentage:".$p;

?>
