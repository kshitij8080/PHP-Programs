<html>
    <body>
        <form method="post" action="labbook-menuedriv.php">
            <br>1) Sort the array by values(changing the keys) in acendin and decending order 
            <br>2) Sort the values without changing the keys 
            <br>3) find the intersction of two arrays 
            <br>4) find the union of two arrays<br>
            <br> Enter choice:
            <input type="text" name="a1"><br>
            <input type="submit"> 
        </form>
    </body>
</html>

<?php

$ch=$_POST["a1"];

  switch($ch)
  {
    case 1: $a=array("om" => "70", "sai" => "55","aman" => "50","dada" => "60");
            echo "<br> original:";
            print_r($a);
            sort($a);
            echo "<br> Acending order:";
            print_r($a);
            rsort($a);
            echo "<br> Decending order:";
            print_r($a);
            break;
    case 2: $a=array("om" => "70", "sai" => "55","aman" => "50","dada" => "60");
            echo "<br> original:";
            print_r($a);
            asort($a);
            echo "<br> Acending order:";
            print_r($a);
            arsort($a);
            echo "<br> Decending order:";
            print_r($a);
            break;
    case 3: $a=array(10,20,30,40);
            $b=array(10,60,70,20);
            $c=array_intersect($a,$b);
            echo "<br> intersection:";
            print_r($c);
            break;
    case 4: $a=array(10,20,30,40);
            $b=array(10,60,70,20);
            $c=array_unique(array_merge($a,$b));
            echo "<br> union:";
            print_r($c);
  }

?>