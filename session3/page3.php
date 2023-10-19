<?php

session_start();
  $msg=$_SESSION["message"];
  $fstyle=$_SESSION["fs"];
  $fontsize=$_SESSION["fsize"];
  $fc=$_SESSION["fcolor"];
  $bg=$_SESSION["bcolor"];

  echo "<body bgcolor=$bg>";
  echo "<font color=$fc size=$fontsize face=$fstyle>";
  echo "$msg";
  echo "</font>";
  echo "</body>";
  

?>