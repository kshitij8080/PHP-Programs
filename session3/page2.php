<?php

session_start();
  $msg=$_POST["t1"];
  $fs=$_POST["t2"];
  $fontsize=$_POST["t3"];
  $fc=$_POST["t4"];
  $bg=$_POST["t5"];

  $_SESSION["message"]=$msg;
  $_SESSION["fs"]=$fs;
  $_SESSION["fsize"]=$fontsize;
  $_SESSION["fcolor"]=$fc;
  $_SESSION["bcolor"]=$bg;

  echo "<br> Message=".$msg;
  echo "<br> Font style=".$fs;
  echo "<br> Font size=".$fontsize;
  echo "<br> Font color=".$fc;
  echo "<br> BG color=".$bg;

?>

<html>
    <body>
        <form method="post" action="page3.php">
          <input type="submit">
        <form>
    </body>
</html>