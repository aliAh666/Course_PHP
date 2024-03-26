<?php

$countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

function arr_flip($array){
  $new_array = [];
  foreach ($array as $key => $value) {
    $new_arra[$value] = $key;
    
  }
    
  return $new_array;
}


echo "<pre>";
print_r(arr_flip($countries));
echo "</pre>";