<?php

  function sum_mult($value){

    $sum = 0;

    if($value > 1000 || $value <= 0){
      return FALSE;
    }
    else {
      while($value <= 1000){
        if($value % 3 == 0 || $value % 5 == 0){
          $sum += $value;
        }
        $value++;
      }

      return $sum;
    }

  }

  $init_value = 1;
  echo sum_mult($init_value);

?>
