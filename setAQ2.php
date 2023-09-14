<?php

  $a=array("rno"=>"101","name"=>"kshitij","per"=>"77.78");

  echo "Display elements along wit keys=";
  print_r($a);

  echo "<br> size of Array=".count($a);

  unset($a["name"]);
  echo "<br> display Array after delete=";
  print_r($a);

  $a=array_reverse($a);
  echo "<br> Dispaly reverse=";
  print_r($a);

?>