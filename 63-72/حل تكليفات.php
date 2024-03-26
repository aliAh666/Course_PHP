<!--------------------------------- اول تكليف حل--------------------------------->
<?php 

$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
  ];

  echo '<pre>';
  print_r(array_chunk(array_change_key_case($friends, 0), 2, True));
  echo '</pre>';

  // Output
// Array
// (
//   [0] => Array
//     (
//       [ag] => Ahmed Gamal
//       [om] => Osama Mohamed
//     )
//   [1] => Array
//     (
//       [mg] => Mahmoud Gamal
//       [as] => Ahmed Samy
//     )
//   [2] => Array
//     (
//       [fa] => Farid Ahmed
//       [sm] => Sayed Mohamed
//     )
// )
?>

<!--------------------------------- ثاني تكليف حل--------------------------------->
<?php 

$codes = ["H", "C", "J"];
$codes1 = ["h", "c", "j"];
$codes2 = array_replace($codes,$codes1);
$means = ["HTML", "CSS", "JavaScript"];

echo '<pre>';
print_r(array_combine($codes2, $means));
echo '</pre>';
?>

<!--------------------------------- ثالث تكليف حل--------------------------------->
<?php

$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
  ];

  echo '<pre>';
  print_r(array_change_key_case(array_flip(array_reverse($friends))));
  echo '</pre>';

  array_change_key_case($friends, 0);
?>

<!--------------------------------- رابع تكليف حل--------------------------------->
<?php

$nums = [10, 20, 30];
// user function with reduce finction طريقة اولى
function add($carry,$item){
    return $carry + $item;
}
echo array_reduce($nums,"add")."<br>";

// Anonymous Function طريقة ثانية
echo array_reduce($nums,fn($carry,$item)=>$carry + $item)."<br>";

// طريقة ثالثة
function add_num($sss){
    $sum = 0;
  for ($i=0; $i < count($sss); $i++) { 
    $sum += $sss[$i]; 
  }
  return $sum;
}
echo add_num($nums);

// طريقة رابعة

echo array_sum($sum);


// Output
// 60
// 60
?>

<!--------------------------------- خامس تكليف حل--------------------------------->
<?php

$nums = [5, 10, 20, 5, 30, 40];

// طريقة اولى
function add_num_without_5($sss){
    $sum = 0;
  for ($i=0; $i < count($sss); $i++) { 
    if($sss[$i] == 5){
        $sum += -5; 
    }
    $sum += $sss[$i]; 
  }
  return $sum;
}
echo add_num_without_5($nums);



// طريقة ثانية
$nums = [5, 10, 20, 5, 30, 40];

  function check_nums($n1, $n2) {
    return $n1 > 5 || $n1 < 5;
  }
  echo array_sum(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));

  ?>
<!--------------------------------- سادس تكليف حل--------------------------------->
<?php

// حل صحيح لكن لا يحقق شرط يجب أن يكون الحل بسطر واحد فقط
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;

$a = str_split($char);
$b = $a[$zero];

$sum = $zero;
foreach ($chars as $key => $value) {
    $sum += $key; # sum of array keys equal 10
}

echo '<pre>';
print_r(array_pad($chars,$sum , $b));
echo '</pre>';

// حل يحقق جميع الشروط
echo '<pre>';
print_r(array_pad($chars,count($chars)+count($chars), substr_replace($char, "", ++$zero)));
echo '</pre>';
?>

<!--------------------------------- سابع تكليف حل--------------------------------->
<?php


$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

// Write Line Here
next($names) . "<br>";
// Write Line Here
next($names) . "<br>";
echo current($names) . "<br>"; // "Sayed"
// Write Line Here
end($names) . "<br>";
echo current($names) . "<br>"; // "Ali"
// Write Line Here
reset($names);
echo current($names) . "<br>"; // "Osama"
// Write Line Here
end($names) . "<br>";
// Write Line Here
prev($names) . "<br>";
echo current($names) . "<br>"; // "Mahmoud"

?>

<!--------------------------------- ثامن تكليف حل--------------------------------->
<?php

$chars = ["A", "B", "C"];

// اول طريقة
$chars = ["A", "B", "C"];
array_push($chars,"D");
echo '<pre>';
print_r($chars);
echo '</pre>';

// ثاني طريقة
$chars = ["A", "B", "C"];
$chars[] = "D";
echo '<pre>';
print_r($chars);
echo '</pre>';

// ثالث طريقة

$chars = ["A", "B", "C"];
array_unshift($chars, "D");
sort($chars);
echo '<pre>';
print_r($chars);
echo '</pre>';

// رابع طريقة

$chars = ["A", "B", "C"]; # ["A", "B", "C",]
$a = implode(" ", $chars);
$b = $a  ." ". "D";
echo "<pre>";
print_r(explode(" ", $b));
echo "</pre>";

// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )
?>

<!--------------------------------- تاسع تكليف حل--------------------------------->
<?php

$nums = [1, 2, 3, 4, 5, 6];
echo "<pre>";
print_r(array_slice($nums, -5, -2));
echo "</pre>";

// Output
// Array
// (
//   [0] => 2
//   [1] => 3
//   [2] => 4
// )
?>

<!--------------------------------- عاشر تكليف حل--------------------------------->
<?php

$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

// Write Your Code Here
current($mix);
next($mix);
next($mix);
$a = current($mix);
echo '<pre>';
array_splice($mix, $a, $a, $nums);
print_r($mix);
echo '</pre>';
?>

<!--------------------------------- تكليف حل 11--------------------------------->
<?php

$arr = ["A", "B", "C", "D", "E"];

function count_num_of_val($array,$multi_dima_arry=true){
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


echo count_num_of_val($arr,false);
?>

<!--------------------------------- تكليف حل 12--------------------------------->
<?php

$nums = [11, 2, 10, 7, 20, 50];

// ----------------My function (implements)
function count_arr_val($array){
  $counter1 = 0;
  $sum = 0;
  foreach ($array as $val) {
      if (is_numeric($val)) {
            $sum += $array[$counter1]; #11,
          }
      $counter1++;
         
    }
    return $sum;
}
echo count_arr_val($nums)."<br>";
?>

<!--------------------------------- تكليف حل 13--------------------------------->
<?php


$nums = [10, 100, 50, -20, 30, 5];
sort($nums);
$m = 0;
foreach ($nums as $key=>$val) {
    if ($m < $val) {
        $m = $val;
    }
} 
echo "The Min Number Is :"." ". $m . "<br>";
// Output
// -20
?>

<!--------------------------------- تكليف حل 14--------------------------------->
<?php

$nums = [10, 100, 50, -20, 30, 5];
sort($nums);
$m = 0;
foreach ($nums as $key=>$val) {
    if ($m > $val) {
        $m = $val;
    }
} 
echo "The Min Number Is :"." ". $m . "<br>";
// Output
// -20
?>

<!--------------------------------- تكليف حل 15--------------------------------->
<?php

// ----------------My function (implements)
function number_of_array_elements($array,$multi_dima_arry=true){
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


// ----------------------------

$chars = ["b" ,"e" ,"W","o", "r", "e", "z", "l", "E"];

# Count the number of array elements using my personal function-------
$index  = number_of_array_elements($chars,false);                          # |
#---------------------------------------------------------------------

foreach ($chars as $key => $value) {
  $index--;
  echo $chars[$index];
}
//  count_arr_val($nums)."<br>";

?>

<!--------------------------------- تكليف حل 16--------------------------------->
<?php

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
sort($mix);
$arr = [];
$index =0;
foreach($mix as $key => $value){
  if (is_numeric($value)) {
    if ($value % 2 !=0) {
          $arr[$index] = $value;
          $index++;
          
        }
      }
}
echo '<pre>';
print_r($arr);
echo '</pre>';

// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )
?>

<!--------------------------------- تكليف حل 17--------------------------------->
<?php

$nums = [1, 2, 3, 4, 5, 6];

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
print_r(shafful_ali($nums));
echo '</pre>';
?>

<!--------------------------------- تكليف حل 18--------------------------------->
<?php
$title = "E&z\$r0 W\$b Sch00&";
echo str_replace(["&","$","0"], ["l","e","o"], $title, $r); // Elzero Web School
echo '<br>';
echo "Replaces Count Is $r"; // 3
echo '<br>';

// Output
// "Elzero Web School"
// 7
?>