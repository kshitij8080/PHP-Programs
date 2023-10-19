<?php

  session_start();
  $rno=$_SESSION["rno"];
  $name=$_SESSION["name"];
  $class=$_SESSION["class"];

  $php=$_POST["t1"];
  $ds=$_POST["t2"];
  $cpp=$_POST["t3"];
  $rdbms=$_POST["t4"];

  $t=$php+$ds+$cpp+$rdbms;
  $p=$t/4;

  echo "<table border='1' width='40%'>";
  echo "<tr><td>seat no:<td>$rno</tr>";
  echo "<tr><td>Name:<td>$name</tr>";
  echo "<tr><td> class:<td>$class</tr>";
  echo "</table>";

  echo"<table border='1' width='40%'>";
  echo "<tr><th>Subject Code <th> subject name <th> marks</tr>";
  echo "<tr> <td>101 <td>PHP <td> $php </tr>";
  echo "<tr> <td> 102 <td> Ds <td> $ds</tr>";
  echo "<tr> <td> 103  <td> cpp <td> $cpp</tr>";
  echo "<tr> <td> 104  <td> rdbms <td> $rdbms</tr>";
  echo "</table>";
  echo "<br> Total Marks:".$t;
  echo "<br> Percentage:".$p;

?>