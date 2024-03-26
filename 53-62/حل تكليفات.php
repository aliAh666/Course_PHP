<!--------------------------------- اول تكليف حل--------------------------------->
<?php 

$num_one = -1;
$num_two = 2.5;

$let_one = "o";
$let_two = "z";

$str = "El%er0";

$str1 = str_split($str);
$str = str_replace([$str1[+$num_two], $str1[strpos($str, 0, $num_one)]], ["z", "o"],$str);

echo $str; // Elzero
?>

<!--------------------------------- ثاني تكليف حل--------------------------------->
<?php 

$str = "Orezle";
echo $str = ucfirst(strtolower(strrev($str)) ) . "<br>";
?>

<!--------------------------------- ثالث تكليف حل--------------------------------->
<?php 

$str = 'aAa';
$num = 3;
$char = "_";

// Write Your Code Here
echo $str = chunk_split(str_repeat(strtolower($str),$num),$num,"_");

// aaa_aaa_aaa_
?>
<!--------------------------------- رابع تكليف حل--------------------------------->
<?php 

$str = "<div><b>Elzero</b></div>";
echo strip_tags($str, "<b>");

// <b>Elzero</b>
?>
<!--------------------------------- خامس تكليف حل--------------------------------->
<?php 

$str = "Elzero Web School";
$e = "e";
$o = "O";
$four = 4;


var_dump(substr_count($str, $e,  $four)); // 1
echo "<br>";
var_dump(substr_count($str, lcfirst($o) ,(substr_count($str, $e,  $four)+($four+$four)))); // 2
echo "<br>";
?>
<!--------------------------------- سادس تكليف حل--------------------------------->
<?php 

$chars = ["E", "l", "z", "e", "r", "o"];
echo implode($chars) . "<br>";
// Output
// "Elzero"
?>
<!--------------------------------- سابع تكليف حل--------------------------------->
<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];


$bro = ""; 
for ($i=0; $i < count($chars); $i++) {
    if (is_string($chars[$i])) {
        $bro .= lcfirst($chars[$i]);
    }else{
        echo "";
    }
}

echo ucfirst($bro)."<br>" ;
// Output
// "Elzero" 
?>

