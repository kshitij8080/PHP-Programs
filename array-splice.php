<?php

   $a=array(10,20,30,40,50,60,70,80,90);

   $b=array_splice($a,3,3,99);

   echo "Deleted Array=<br>";
   print_r($b);

   echo "<br> Insert Elements=<br>";
   print_r($a);


?>