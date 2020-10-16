<?php

function func_recursive($value){
    if($value % 2 == 0 && $value % 3 == 0 && $value % 10 == 0){
        return $value;
    }
    else{
      return func_recursive($value + 1);
    }

}

$init_value = 1;

echo func_recursive($init_value);
?>
