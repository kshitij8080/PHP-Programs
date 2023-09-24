<html>
    <body>
    <form method="post" action="">
        Enter Name:
        <input type="text" name="t1"><br>
        Enter address:
        <textarea name="t2"></textarea><br>
        PIN CODE:
        <input type="text" name="t3"><br>
        Gender:
        <input type="radio" name="r1" value="male">male<br>
        <input type="radio" name="r1" value="female">female<br>
        <input type="submit" >
    </form>
    </body>
</html>

<?php

   $name=$_POST["t1"];
   $ADDRESS=$_POST["t2"];
   $PCODE=$_POST["t3"];
   $Gender=$_POST["r1"];

   if(!empty($name)&&!empty($ADDRESS)&&!empty($PCODE)&&!empty($Gender))
   {
    echo "<br>NAME=".$name;
    echo "<br>ADDRESS=".$ADDRESS;
    echo "<br>PIN CODE=".$PCODE;
    echo "<br>GENDER=".$Gender;
   }
   else
   {
    echo "All fields are required......";
   }
?>