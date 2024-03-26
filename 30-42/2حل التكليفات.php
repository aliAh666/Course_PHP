<!--------------------------------- اول تكليف حل--------------------------------->

<?php
#------------------------اول طريقة
// for ($index = 10; $index > 0; $index--) {
//     echo "$index<br>";
//   }

#------------------------اول طريقة
// $index = 10;
// while($index > 0){
//     echo "$index<br>";
//     $index--;
// }
?>

<!--------------------------------- ثاني تكليف حل--------------------------------->

<?php

// For Loop:
// $index = 2;
// for ($index = 2; $index <= 20; $index++) {
//     if ($index % 2 ==0) {
//         echo "$index" ." "."Even Number <br>";
//     }
//   }


// While Loop:
// $index = 2;

// while($index <= 20){

//   if ($index % 2 ==0) {
//         echo "$index" ." "."Even Number <br>";
//     }
//     $index++;
// }

// Do-While Loop:
// $index = 0;
// do {
//   if ($index % 2 ==0) {
//       echo "$index" ." "."Even Number <br>";
//       }
//         $index++;
// } while ($index <= 20);
?>

<!--------------------------------- ثالث تكليف حل--------------------------------->

<?php

// $num = 2;
// while ($num < 520) {
//   $x = (3*(pow(2,($num-1)-1)- 1)) +1;
//   echo $x;
//   if ($x == 382) {
//     break;
//   }
//   echo "<br>";
//   $num++;
// }
?>

<!--------------------------------- رابع تكليف حل--------------------------------->
<?php

// $start = 10;
// $end = 0;
// $stop = 3;

// for ($start = 10; $start >= $stop; $start--) { 
//   if ($start == 10) {
//     echo "$start<br>";
//   }else{
//     echo "$end$start<br>";
//   }
// }
?>

<!--------------------------------- خامس تكليف حل--------------------------------->

<?php

// $i = 0;
// $mix = [1, 2, 3, "A", "B", "C", 4];
// for (++$i; $i < count($mix) ; $i++) { 
//   if(is_numeric($mix[$i])){
//     echo $mix[$i] ."<br />";
//   }
// }

?>

<!--------------------------------- سادس تكليف حل--------------------------------->

<?php

// $money = ["Ahmed" => 100, "Sayed" => 150, "Osama" => 100, "Maher" => 250];

// foreach ($money as $names => $mymony) {
//   echo "The Name Is $names And I Need $mymony Pound From Him<br>";
// }

?>

<!--------------------------------- سابع تكليف حل--------------------------------->

<?php
// $mix = [1, 2, "A", "B", "C", 3, 4];

/////////////////////////////
// $int_keys1 = count(array_filter(array_values($mix), 'is_int'));#متغير انا عملتو مانو من المعطيات
// $int_keys2 = count(array_filter(array_values($mix), 'is_string'));#متغير انا عملتو مانو من المعطيات
#echo $int_keys1;
#echo "<br>";
#echo $int_keys2;
/////////////////////////////

# FOREACH طريقة بحلقة 
// foreach ($mix as $x) { 
// if (is_numeric($x)) {
//     echo $x . "<br>";
//     }
// }
// echo "<br>";
// echo $int_keys1 . " Numbers Printed";
// echo "<br>";
// echo $int_keys2 . " Letters Ignored";


# FOR طريقة بحلقة 
// for ($i=0; $i < count($mix); $i++) { 
//   if (is_numeric($mix[$i])) {
//     echo $mix[$i] . "<br>";
//   }
// }
// echo "<br>";
// echo $int_keys1 . " Numbers Printed";
// echo "<br>";
// echo $int_keys2 . " Letters Ignored";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"
?>

<!--------------------------------- ثامن تكليف حل--------------------------------->

<?php

// $nums = [1, 13, 12, 20, 51, 17, 30];
// for ($i=0; $i < count($nums); $i++) { 
//   if ($nums[$i] %2 == 0) {
//     echo $nums[$i]/2 . "<br>";
//   }
// }

?>

<!--------------------------------- تاسع تكليف حل--------------------------------->

<?php

// $help_num = 3;
// $nums = [4, 5, 6, 1, 2, 3];
// $names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

// حل باستخدام المعطيات الي حطها بالمثال
// for ($nums[$help_num]; $nums[$help_num] < count($names); $nums[$help_num]++) { 
//     if($nums[$help_num] < $help_num){
//         echo $names[$nums[$help_num]] . "<br>";
//       }
//     }
    
// حل من عندي بدون المعطيات الي عطاني ياها

// for ($i=1; $i < count($names); $i++) { 
//   if($i<3){
//     echo $names[$i] . "<br>";
//   }
// }
?>


<!--------------------------------- عاشر تكليف حل--------------------------------->

<?php

// $help_num = 4;
// $nums = [2, 4, 5, 6, 10];

// $a = array_reverse($nums); # ضفتها من عندي انا تعلمتها بس صحيحة يعني

// # FOR طريقة بحلقة     
// for ($i=0; $i < count($nums); $i++) { 
//   echo $nums[$i] ." + ". $a[$i] ." = ". $nums[$i] +  $a[$i] . "<br>";   
// }

// echo "<br>";
// echo "##########################";
// echo "<br>";


// # FOREACH طريقة بحلقة 
// $nums = [2, 4, 5, 6, 10];
// $index =count($nums);
// foreach ($nums as $num ) {
//   echo  $num ." + " . $nums[--$index] ."=". $num + $nums[$help_num--] . "<br>";  
// }



// ."=". $num + $nums[--$index]

// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"

?>