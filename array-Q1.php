<html>
    <body>
        <form method="post" action="array-Q1.php">
           Enter Value to search:
            <input type="text" name="t1"><br>
            <input type="submit">
        </form>
    </body>
</html>

<?php

 $a=array("php","big data","SE","ds");
 print_r($a);
 $val=$_POST["t1"];
 if(in_array($val,$a))
  print "<br>Value is found..";
 else
  print "<br>Value is not found..";
?>