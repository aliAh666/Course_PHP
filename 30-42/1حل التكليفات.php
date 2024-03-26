<?php

// <!--------------------------------- اول تكليف حل--------------------------------->
// $a = 100;
// $b = 200;
// $c = 100;
// $d = $a + $c;
// // var_dump($b > $a);
// if ($b > $a){
//     if ($a === $c) {
//         if ($b == $d) {
//             echo "Yes";
//         }else{
//             echo "No";
//         }
//     }else{
//         echo "No"; 
//     }
// }else{
//     echo "No";
// }
    
?>


 <!--------------------------------- ثاني تكليف حل--------------------------------->

<?php

// Test Case 1

// $test1 = [$a=100, $b = 200, $c = 300];

// // Test Case 2
// $test2 = [$a=200, $b = 100, $c = 300];

// // Test Case 3
// $test3 = [$a=200, $b = 200, $c = 100];


// $a = 200;
// $b = 200;
// $c = 100;

// switch([$a, $b, $c]) :

//     case ($a == 100 and $b == 200 and $c = 300):
//         echo " A Is Not Larger Than B Or C";   
//         break;

//     case ($a == 200 and $b == 100 and $c = 300):
//         echo "A Is Larger Than B";   
//         break;

//     case ($a == 200 and $b == 200 and $c = 100):
//         echo "A Is Larger Than c";   
//         break;
    
// endswitch;
?>

 <!--------------------------------- ثالث تكليف حل--------------------------------->

 <?php

//  $admins = ["Osama", "Ahmed", "Sayed"];
//  if ($_SERVER["REQUEST_METHOD"] === "POST"){
//     $username = $_POST['user'];
//     echo "The Request Method Is Post And Username Is"." ".$username;
//     if (in_array($username, $admins)){
//         echo "<br>";  
//         echo "This Username"." ". $username ." ". "Is Admin";      
//     }else{
//         echo "<br>";
//         echo "This Username"." ". $username ." ". "Is Not Admin";   
//     }
// }else{
//     echo "Hi Please Enter Your Name";
// }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="text" name="user">
            <input type="submit" value="Send">
        </form>
    </div>
</body>
</html> -->


<!--------------------------------- رابع تكليف حل--------------------------------->

<?php
// $a = 30;
// $b = 20;
// $c = 10;

// echo ($a + $b === $c) ? "A + B = C": (($a + $c === $b) ? "A + C = B" : ((($b + $c === $a) ? "B + C = A": "The End")));

?>

<!--------------------------------- خامس تكليف حل--------------------------------->
<?php

// $name = "Osama";
// $age = 40;
// $country = "Egypt";

// if ($age > 18) {
//   echo "A<br>";
//   if (gettype($name) === "string") {
//     echo "B<br>";
//     if ($country === "Egypt") {
//       echo "C<br>";
//     }
//   }
// }

// print $age > 18 ? 
//     (gettype($name) === "string" ?
//     (($country === "Egypt" ?
//      "C<br>") :
//       "B<br>" : 
//       "A<br>"));

?>

<!--------------------------------- سادس تكليف حل--------------------------------->
<?php

// $genre = "Hack And Slash";

// switch($genre){
//     case "RPG":
//         echo "I Recommend Ys Games";
//         break;
//     case "Hack And Slash":
//         echo "I Recommend Castlevania Games";
//         break;
//     case "FPS":
//         echo "I Recommend Uncharted Games";
//         break;
//     case "Platform":
//     case "Puzzle":
//         echo "I Recommend Megaman Games";
//         break;
//     default:
//         echo "I Recommend Megaman Games";
// }

// Needed Output
// "I Recommend Castlevania Games"

?>

<!--------------------------------- سابع تكليف حل--------------------------------->
<?php

// $num_one = 23;
// $num_two = 5;
// $op = "+";

// if ($op == "+"){
//     echo $num_one  + $num_two;
// }elseif($op == "-"){
//     echo $num_one - $num_two;
// }elseif($op == "/"){
//     echo (int)($num_one / $num_two);
//     echo "<br>";
//     echo $num_one % $num_two;
// }elseif($op == "*"){
//     echo $num_one * $num_two;
// }else{
//     echo "Unknown Operation";
// }

?>

<!--------------------------------- ثامن تكليف حل--------------------------------->
<?php

// $day = "Mon";

// if($day == "Sat" || $day =="Sun" || $day == "Mon"){
//     echo "We Are Open All The Day";
// }elseif($day == "Tue" || $day == "Wed"){
//     echo "We Are Open From 08:12";
// }elseif($day == "Thu" || $day ==  "Fri"){
//     echo "We Are Closed";
// }else{
//     echo "Unknown Day";
// }

?>