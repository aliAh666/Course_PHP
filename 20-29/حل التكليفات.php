<!--------------------------------- اول تكليف حل--------------------------------->
<?php 
// echo ((((10*(20-15)*3)-190)*10)+400); // 0
?>

<!--------------------------------- ثاني تكليف حل---------------------------------->
<?php

//اول طريقة
// $a = (int)"10";
// echo ($a);
// echo '<br>';
// echo gettype($a);

// echo '<br>';
// echo '<br>';

// //ثاني طريقة
// $a = "10" or false;
// echo  +$a;
// echo '<br>';
// echo gettype(+$a);

// echo '<br>';
// echo '<br>';

// //ثالث طريقة
// $a = "10";
// echo  -(-$a);
// echo '<br>';
// echo gettype(-$a);

// echo '<br>';
// echo '<br>';

// //رابع طريقة
// $a = "10";
// $b = intval($a);
// echo '<br>';
// echo $b;
// echo '<br>';
// echo gettype($b);

// echo '<br>';
// echo '<br>';

// //خامس طريقة
// $a = "10";
// settype($a,'integer');
// echo $a;
// echo '<br>';
// echo gettype($a);

// ?>
<!--------------------------------- ثالث تكليف حل---------------------------------->

<?php

// $a = 10;
// $b = 20;
// $d = $a + $b;
// echo  -($d || false);
?>

<!--------------------------------- رابع تكليف حل---------------------------------->

<?php

// $a = 10;
// $b = 20;
// $c = 15;

// var_dump($a != $b); // True
// echo '<br>';
// var_dump($c >= $a); // True
// echo '<br>';
// var_dump($a <= $b); // True
// echo '<br>';
// var_dump($a !== $b); // True
// echo '<br>';
// var_dump($a <> $c); // True
// echo '<br>';
// var_dump($a <  $c); // True
// echo '<br>';
// var_dump(gettype($a) && gettype($b)); // True
// echo '<br>';
// var_dump(gettype($a) or gettype($b)); // True
// echo '<br>';
// var_dump(gettype((float) $a) and gettype($b)); // True

?>

<!--------------------------------- خامس تكليف حل---------------------------------->

<?php

// $points = 10;
// // Write Your Code Here
// ++$points;
// $points++;
// $points++;
// echo $points;
// echo '<br>';
// $points--;
// $points--;
// $points--;
// $points--;
// $points--;
// echo $points;

?>

<!--------------------------------- سادس تكليف حل---------------------------------->

<?php

// $a = "Elzero";
// $b = "Web";
// $c = "School";

//method one
// $d = "$a " . "$b " ."$c" ;
// echo $d;
// echo '</br>';
// echo '</br>';

//method tow
// $d = "{$a} {$b} {$c}" ;
// echo $d;
// echo '</br>';
// echo '</br>';

//method three
// $d = "$a $b $c" ;
// echo $d;
// echo '</br>';
// echo '</br>';

//method four
// $d = $a ." ". $b ." ". $c ;
// echo $d;
// echo '</br>';
// echo '</br>';

?>

<!--------------------------------- سابع تكليف حل---------------------------------->

<?php

// $a = 10;
// $b = 20;

// echo (($a + $b) * ($a + $b) + ($a * $a)) * $a;
// echo '</br>';
?>

<!--------------------------------- ثامن تكليف حل---------------------------------->

<?php

// $a = @$b or die("Custom Error");

// $f = @file("Not_A_File") or die("Custom Error");

// @(include("Not_A_File")) or die("Custom Error");
?>