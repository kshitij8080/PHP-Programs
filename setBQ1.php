<?php

  $s1="rbnb";
  $s2="college";
  $k=strcmp($s1,$s2);
   if($k==0)
     echo "String are same..";
   if($k>0)
     echo "First string is greater=".$s1;
    
   if($k<0)
     echo "Second string is greater=".$s2;

    $s1=strtoupper($s1);
    $s2=strtolower($s2);
       echo "<br> Uppercase String=".$s1;
       echo "<br> Uppercase String=".$s2;
?>