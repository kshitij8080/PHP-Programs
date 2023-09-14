<?php

  function leapyear($y)
  {
    if($y % 4 == 0)
      echo "Given Year is Leap...";
    else
      echo "Given year is not Leap...";
  }

  leapyear(2028)

?>