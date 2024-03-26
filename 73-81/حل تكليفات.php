<!--------------------------------- اول تكليف حل--------------------------------->
<?php

$a = rand(10,20);
if ($a!=10 and $a!=20) {
    echo $a.'<br>';
}
?>

<!--------------------------------- ثاني تكليف حل--------------------------------->
<?php

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];
$count = count($friends);
$i = rand(0,$count-1);
$a = $friends[$i];
echo $a;

?>

<!--------------------------------- ثالث تكليف حل--------------------------------->
<?php
$num1 = 11.5; // 11
$num2 = 9.4898; // 9.5
$num3 = -7.5; // -7

echo round($num1,0,PHP_ROUND_HALF_DOWN).'<br>';
echo round($num2,1).'<br>';
echo round($num3,0,PHP_ROUND_HALF_DOWN).'<br>';
?>

<!--------------------------------- رابع تكليف حل--------------------------------->
<?php
// ماعرفت حلو مبدئياً ماكان عندي وقت لفكر كتير
?>

<!--------------------------------- خامس تكليف حل--------------------------------->
<?php

$url1 = "http://www.elz ero.org";;
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

if (filter_var($url1, FILTER_VALIDATE_URL)) : echo "Valid URL"; else : echo "Not A Valid URL"; endif; echo'<br>';
if (filter_var($url2, FILTER_VALIDATE_URL)) : echo "Valid URL"; else : echo "Not A Valid URL"; endif; echo'<br>';
if (filter_var($url3, FILTER_VALIDATE_URL)) : echo "Valid URL"; else : echo "Not A Valid URL"; endif; echo'<br>';
if (filter_var($url4, FILTER_VALIDATE_URL)) : echo "Valid URL"; else : echo "Not A Valid URL"; endif; echo'<br>';
?>
<!--------------------------------- سادس تكليف حل--------------------------------->
<?php

$url1 = "http://www.elz ero.org";
$url2 = "http://¥elzero.org";
$url3 = "https://elzero.org";
$url4 = "https://elzero.o¥rg";

echo filter_var($url1, FILTER_SANITIZE_URL).'<br>';
echo filter_var($url2, FILTER_SANITIZE_URL).'<br>';
echo filter_var($url3, FILTER_SANITIZE_URL).'<br>';
echo filter_var($url4, FILTER_SANITIZE_URL).'<br>';

// Output
// http://www.elzero.org
// http://elzero.org
// https://elzero.org
// https://elzero.org