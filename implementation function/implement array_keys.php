<?php

//      implement array_keys by Eng.Ali Ahmad
//      ---------------------------------------------
//      |                                           | 
//      |  array_keys($array,specific,$bool)        | 
//      |                                           | 
//      ---------------------------------------------

$friends = ["Osama", 9, "Gamal", 9,"Osama", "Eman", 1, "1" ,"Gamal"];

function arr_key($ss,$num=Null,$bool=false){
  $arr_k=[];
  $index =0;

    if ($bool==false) {
          if (is_numeric($num) or is_string($num) or is_array($num) or is_bool($num)) {
              foreach ($ss as $key => $value) {
                if ($num == $value) {
                  $arr_k[$index] = $key;
                  $index++;
              }
            }
            return $arr_k;
                }else{
                foreach ($ss as $key => $value) {
                  $arr_k[$key] = $key; 
                  }
                return $arr_k;
              }
      }elseif ($bool==true){
                if (is_numeric($num) or is_string($num) or is_array($num) or is_bool($num)) {
                    foreach ($ss as $key => $value) {
                      if ($num === $value) {
                        $arr_k[$index] = $key;
                        $index++;
                         }
                       }
                    return $arr_k;
                }else{
                foreach ($ss as $key => $value) {
                  $arr_k[$key] = $key; 
                  }
                return $arr_k;
              }
      }
}




echo '<pre>';
print_r(arr_key($friends,"Gamal"));
echo '</pre>';


echo '<pre>';
print_r(array_keys($friends,"Gamal"));
echo '</pre>';
