<?php

   $name=$_POST["t1"];
   $productname=$_POST["t2"];
   $qty=$_POST["t3"];
   $price=$_POST["t4"];

   $a=explode(" ",$productname);
   $b=explode(" ",$qty);
   $c=explode(" ",$price);

   echo "<table width='50%'  border='1'>";
    echo "<tr> <th colspan='5'>Customer Name=".$name;
    echo "<tr> <th>sr no:";
    echo "<th>Product name:";
    echo "<th>Quantity:";
    echo "<th>Rate:";
    echo "<th>Total:";
    echo "</tr>";

  $t=0;
    for($i=0;$i<count($a);$i++)
    {
       echo "<tr> <td>".($i+1);
       echo "<td>".$a[$i];
       echo "<td>".$b[$i];
       echo "<td>".$c[$i];
       echo "<td>".$b[$i]*$c[$i];
       echo "</tr>";
       $t=$t+$b[$i]*$c[$i];
    }
    echo "<tr><th colspan='5'>Total Bill Amount=".$t;
    echo "</table>";

?>