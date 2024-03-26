<!--------------------------------- اول تكليف حل--------------------------------->
<?php 

// function greenting($name,$type){
//     if($type==="Male"){
//         echo "Hello Mr ".$name;
//     }elseif($type==="Female"){
//         echo "Hello Miss ".$name;
//     }else{
//         echo "Hello".$name;
//     }
//     // return $name,$type;
// }

// echo greenting("Ali","Male");
// echo '<br>';
// echo greenting("sara","Female");
// echo '<br>';

// ?>

<!--------------------------------- ثاني تكليف حل---------------------------------->
<?php

#--------اول طريقة
// function get_arguments1(...$items){
//     $all = "";
//     foreach($items as $item){
//         $all .= $item." ";
//     }
//     return $all;
// }

// echo get_arguments1("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
// echo '<br>';
// echo get_arguments1("I", "Love", "PHP"); // I Love PHP

//---------------------------

#--------ثاني طريقة
// function get_arguments2(){
//     $all = " ";
//     foreach(func_get_args() as $item){
//         $all .= $item." ";
//     }
//     return $all;
// }

// echo get_arguments2("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
// echo '<br>';
// echo get_arguments2("I", "Love", "PHP"); // I Love PHP
// ?>
<!--------------------------------- ثالث تكليف حل---------------------------------->

<?php

// function sum_all(...$numbers){
//     $result = 0;
//     foreach($numbers as $number){
//         $result += $number;
//         if($number == 5){
//             $result -= $number;
//         }
//         if($number == 10){
//             $result += $number;
//         }
//     }
//     return $result ;
// }

// echo sum_all(10, 12, 5, 6, 6, 10); // 64
// echo sum_all(5, 10, 5, 10); // 40
?>

<!--------------------------------- رابع تكليف حل---------------------------------->

<?php

// function multiply(...$numbers){
//     $result = 1;
//     foreach ($numbers as $number) {
//             if (is_numeric($number) or is_float($number)) {
//                 $result *= (int)$number;
//             }
//         }
//     return $result ;
// }

// echo multiply(10, 20); // 200
// echo '<br>';
// echo multiply("A", 10, 30); // 300
// echo '<br>';
// echo multiply(100.5, 10, "B"); // 1000
?>

<!--------------------------------- خامس تكليف حل---------------------------------->

<?php

// function check_status($a, $b, $c) {

//     $var = func_get_args();
//     for ($i=0; $i <count($var) ; $i++) { 

//         if(is_bool($var[$i])){
//             $bol = $var[$i];
//             if($bol === true){
//                 $bol = "You Are Available For Hire";
//             }else{
//                 $bol = "You Are Not Available For Hire";
//             };

//         }elseif(is_numeric($var[$i])){
//             $number = $var[$i];

//         }elseif(is_string($var[$i])){
//             $string = $var[$i];
//         }
//     }

//     return "Hello $string, Your Age Is $number  $bol";
// }


// echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo '<br>';
// echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo '<br>';
// echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
// echo '<br>';
// echo check_status(false, "Osama", 38); // "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
// echo '<br>';
// echo check_status(false, "Ali", 26); // "Hello Ali, Your Age Is 26, You Are Not Available For Hire"
?>

<!--------------------------------- سادس تكليف حل---------------------------------->

<?php

// function calculate($x1, $x2, $type="add"){


//     if ($type == "s" or $type == "subtract") {
//         $result = $x1 - $x2;
//         echo $result;
//     }elseif($type == "a" or $type == "add"){
//         $result = $x1 + $x2;
//         echo $result;
//     }elseif($type == "m" or $type == "multiply"){
//         $result = $x1 * $x2;
//         echo $result;
//     }elseif($type != "a" or $type != "add" or $type != "s" or $type != "subtract" or $type != "multiply" or $type != "multiply"){
//         echo "fuck you";
//     }elseif($type == null){
//         $type = $x1 + $x2;
//         echo $type;

//     }
// }

// echo calculate(10, 20); // 30
// echo '<br>';
// echo calculate(10, 20, "a"); // 30
// echo '<br>';
// echo calculate(10, 20, "s"); // -10
// echo '<br>';
// echo calculate(10, 20, "subtract"); // -10
// echo '<br>';
// echo calculate(10, 20, "multiply"); // 200
// echo '<br>';
// echo calculate(10, 20, "m"); // 200
?>

<!--------------------------------- سابع تكليف حل---------------------------------->
<?php

// function calculate(int $num_one, int $num_two) {
//     $x1 = (float)$num_one;
//     $x2 = (float)$num_two;
//     return $x1 + $x2;
//   }
  
//   echo calculate(20, 10); // 30
//   echo '<br>';
//   echo gettype(calculate(20, 10)); // Double

?>

<!--------------------------------- ثامن تكليف حل---------------------------------->
<?php

// $message  = "Hello ";
// $a = &$Hello;

// $a = function($someone) use($message){
//     return $message . $someone;
//   };

// echo $Hello("Osama"); // Hello Osama

?>

<!--------------------------------- تاسع تكليف حل---------------------------------->
<?php

// #Anonymous Function
// $greet = function($someone){
//     return "Greetings";
// };

// # Arrow Function
// $greet = fn($someone) => "Greetings";

// echo $greet("Osama"); // Greetings