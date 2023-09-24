<html>
    <body>
       <form method="post" action="">
          Enter mobile no:
          <input type="text" name="t1"><br>
          <input type="submit" value="check">
       </form>
    </body>    
</html>

<?php

  $s1=$_POST["t1"];
  echo "mob no.:".$s1;

  if(filter_var(FILTER_VALIDATE_INT)&& strlen($s1)==10)
    echo "<br>no. is validate";
  else
    echo "<brno. is invalid...";

?>