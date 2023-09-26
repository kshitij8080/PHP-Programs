<html>
    <body>
        <form method="post" action="distance.php">
            Enter distance:<br>
            <input type="text" name="t1"><br><br>
            <input type="radio" name="r1" value="mile_to_kilometer">Miles to kilometer<br><br>
            <input type="radio" name="r1" value="kilometer_to_mile">kilometer to mile<br><br>
            <hr>
            <input type="submit"value="convert">&nbsp&nbsp&nbsp&nbsp
            <input type="reset">
        </form>
    </body>
</html>

<?php
if(isset($_POST['t1'])&&isset($_POST['r1']))
{
  $dis=$_POST["t1"];
  $ch=$_POST["r1"];


  if($ch=="mile_to_kilometer")
  {
    $k=$dis*1.6;
    echo "<br> mile to kilometer=".$k;
  }
  elseif($ch=="kilometer_to_mile")
  {
    $m=$dis/1.6;
    echo "<br>kilometer to mile=".$m;
  }
}
?>