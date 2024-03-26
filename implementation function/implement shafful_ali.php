<?php

$chars = ["Ali", "Youssef", "Hasan", "Ahmad"];

// echo '<br>';
// shuffle($chars);
// echo '<br>';

// echo '<pre>';
// print_r($chars);
// echo '</pre>';

function shafful_ali($array) { 
  $i = count($array); 
  while(--$i) { # --4 = 3
     $j = rand(0, $i); #rand(0,3)
     if ($i != $j) { # if(0 != [1 or 2 or 3] is true >>then do the next code Example j=1)
      // swap elements 
          $tmp = $array[$j]; # $tmp = $array[1] = "B";
          $array[$j] = $array[$i]; # $array[1] = $array[0];
          $array[$i] = $tmp; # $array[0] = "B"
        }
      } 
      return $array;
  } 
echo '<pre>';
print_r(shafful_ali($chars));
echo '</pre>';