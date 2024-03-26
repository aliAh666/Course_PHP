<?php

$counting = [
  "A",
  "A",
  "B",
  "C",
  [1, 2, 3],
  [1, 2, 3],
];


function count_arr_val($array,$multi_dima_arry=true){
  $counter1 = 0;
  $counter2 = 0;
  foreach ($array as $val) {
    if ((is_string($val) or is_numeric($val) or is_array($val) or is_bool($val)) and $multi_dima_arry==true) {
          $counter1++;
          if (is_array($val)) {
            foreach($val as $var_arr){
              if (is_string($var_arr) or is_numeric($var_arr) or is_array($var_arr) or is_bool($var_arr) and $multi_dima_arry==true) {
                $counter2++;
                }
              }
            }
          }
    elseif((is_string($val) or is_numeric($val) or is_array($val) or is_bool($val)) and $multi_dima_arry==false){
      $counter1++;
          }             
    }        
  return $counter2+$counter1;
}


echo count_arr_val($counting,false);







