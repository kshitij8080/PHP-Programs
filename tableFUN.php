<?php

   function printtable($num)
   {
    for($i=1;$i <= 10;$i++)
    {
     $n=$i*$num;
     echo "$num * $i = $n";
     echo "<br>";
    }
   }

   printtable(12);

?>