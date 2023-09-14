<?php

$a=array(array("c","dbms","web tech"),
               array("ds","php","cpp"),
               array("java","python","xml","jsp"));
    
    echo "FY Subjects=";
    print_r($a[0]);
    
    echo "<br> SY subjects=";
    print_r($a[1]);

    echo "<br> TY subjects=";
    print_r($a[2]);

    $flag=0;
    foreach($a as $b)
    {
        if(in_array("java",$b))
        {
            $flag=1; break;
        }
    }
    if($flag==1)
      echo "<br><br><br> Found...";
    else
      echo "<br><br><br> Not Found...";

?>