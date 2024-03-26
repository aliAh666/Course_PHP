<?php

$counting = ["B", "A", "A", "B", "B", "B", "C"];

// ----------------built-in function
echo "<pre>";
print_r(array_count_values($counting));
echo "</pre>";


// ----------------My function (implements)
function count_num_of_same_value($array) : array{
    $ccc = [];
    foreach($array as $arr){
      $count = 0;
      for ($i=0; $i < count($array); $i++) { 
        if ($array[$i] == $arr) {
          $count++;
        }
      }
      $ccc[$arr] = $count;
    }
    return $ccc;
}
echo "<pre>";
print_r(count_num_of_same_value($counting));
echo "</pre>";
