<?php

/*
     Magic Methods
    - Method With Special Name Start With Double Underscore [ __ ]
    Get:
    - Called When Getting A Property Not Accessible Or Not Found
    - Accept One Parameters [ $Prop ]
    Set:
    - Called When Setting A Value To a Property Not Accessible Or Not Found
    - Accept Two Parameters [ $Prop, $Value ]
*/



// <-------------------Example1------------------>

// class Phone {
//     public $name;
//     public $ram;
//     public function __get($prop){
//         echo 'The Property [ ' . $prop . ' ] Is Not Found Or Not Accessible'.'<br>';
//     }

// }

// $phone = new Phone(); 
// echo $phone->coloring;
// echo $phone->testing;
// echo $phone->override;
// echo '<pre>';
// print_r($phone);
// echo '</pre>';



// <-------------------Example2------------------>

class Phone {
    public $name;
    public $ram;
    private $coloring;
    public function __set($prop, $val){
        echo 'The Property [ ' . $prop . ' ] Is Not Found Or Not Accessible'.'<br>';
        echo 'And You Cannot Assign This Value [ ' . $val . ' ] To It'.'<br>';
    }
    

}

$phone = new Phone(); 
$phone->coloring = "Red";
$phone->notfound = "Testing";
// echo $phone->coloring;

echo '<pre>';
print_r($phone);
echo '</pre>';