<?php

  session_start();
  $_SESSION["rno"]=$_POST["t1"];
  $_SESSION["name"]=$_POST["t3"];
  $_SESSION["class"]=$_POST["t2"];

?>

<html>
<body>
<form method="post" action="page3.php">
        <h1>Subject Marks</h1>
        PHP:<br>
        <input type="text" name="t1"><br>
        DS:<br>
        <input type="text" name="t2"><br>
        CPP:<br>
        <input type="text" name="t3"><br>
        RDBMS:<br>
        <input type="text" name="t4"><br>
        <input type="submit" value="NEXT">
</form>
</body>
</html>