<html>
    <body>
        <form method="post" action="">
            Enter Email id:
            <input type="text" name="t1"><br>
            <input type="submit" value="OK">
        </form>
    </body>
</html>

<?php

$s1=$_POST["t1"];
echo "email id=".$s1;
if(filter_var($s1,FILTER_VALIDATE_EMAIL))
  echo "<br> email is valid...";
else
  echo "<br> invalid email...";

?>