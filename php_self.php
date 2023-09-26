<html>
    <body>
        <form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
             
            Enter no 1:
            <input type="text" name="t1"><br>
            Enter no 2:
            <input type="text" name="t2"><br>
            <input type="submit"  value="addition">

        </form>
    </body>
</html>

<?php
 if(isset($_POST["t1"])&&isset($_POST["t2"]))
 {
  $a=$_POST["t1"];
  $b=$_POST["t2"];
  $c=$a+$b;
  echo("addition=".$c);
 }
?>