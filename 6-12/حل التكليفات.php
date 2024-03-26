<?php

/*------------1 homework------------*/
echo (int)(15.2 + 14.7) + (10.5 + 10.5); // 50

echo '</br>';
echo '</br>';

echo (int)15.2 + (int)14.7 + (10.5 + 10.5); // 50

echo '</br>';
echo '</br>';


echo gettype((int)15.2 +(int) 14.7 + (int)(10.5 + 10.5)); // Integer
echo '</br>';
echo '</br>';
// /*------------2 homework------------*/

echo '</br>';
echo gettype(100);
echo '</br>';
$x1=101;
echo '</br>';
echo var_dump($x1);
echo '</br>';
echo '</br>';
echo print_r($x1);
echo '</br>';


// /*------------3 homework------------*/

echo "
Needed Output </br>
Hello \"Elzero\" 
\\\\ \"\"\" 
We Love \"\$\$PHP\"";
echo '</br>';

// /*------------third homework------------*/

echo nl2br("We \n Love \n Elzero \n Web \n School");
echo '</br>';
echo '</br>';

/*------------5 homework------------*/

echo <<<'aaa'
<ul style="list-style-type:none;">
<li> Hello "'Elzero'" </li>
<li> We Love $Programming$ </li>
<li> Languages Specially "PHP" </li>
</ul>
aaa;




/*------------6 homework------------*/

$something = "Programming";

echo <<<"code"
        Hello \PHP\
        We Love $something
        code;
        echo '<br>';
        echo '<br>';
        echo '<br>';

// /*------------7 homework------------*/


$x = "Hello PHP";
print_r((bool) "Hello PHP");
echo '<br>';
echo '<br>';
echo gettype((int) $x);


// /*------------8 homework------------*/

echo '<pre>';
print_r([
    "FrontEnd"=>["HTML",
                 "CSS",
                 "JS"=> ["Vuejs"=>[2=>"v2",
                                   3=>"v3"],
                          0=>"Reactjs",
                          1=>"Svelte"]                              
                ],


    "BackEnd"=> [0=>"PHP",
                 1=>"MySQL",
                 2=>"Security"
                ],

    0=>"Git",

    1=>"Github",

    "Testing"=>[0=>"Unit Testing",
                1=>"End To End",
                2=>"Integration"]


]);
echo '</pre>';