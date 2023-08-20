<?php

  $rno=55;
  $name="kxitij";

  $a=array("rno"=>"101","name"=>"sai","per"=>"77.99");
  extract($a,EXTR_PREFIX_SAME,"p");

  echo "Roll no=".$rno;
  echo "<br>Name=".$name;
  echo "<br>per=".$per;

  echo "<br><br><br> roll no=".$p_rno;
  echo "<br> name=".$p_name;

?>