<?php

/*
     Magic Methods
    - Method With Special Name Start With Double Underscore [ __ ]
    Call:
    - Called When Invoking Function Not Accessible Or Not Found
    - Accept Two Parameters [ $MethodName, $Params ]
*/


class Phone {
    public $name;
    public $ram;
    // private function sayHello(){
    //     echo 'Hello';
    // }

    // public function welcomToApp($na,$ra){
    //     $this -> name = $na;
    //     $this -> ram = $ra;
    //     echo 'Welcome ' . $na . ' Your Phone Has ' . $ra . ' Ram';
    // }

    public function __call($method, $params){
        echo 'The [ ' . $method . ' ] Not Found Or Not Accessible'.'<br>';
        $index = 0;
        foreach($params as $par){
            echo $par . ' This Is Argument ' . $index . '<br>';
            $index++;
        }
    }
}



$phone = new Phone(); 
$phone ->sayHello(); 
// $phone ->sayBay();
$phone->welcomToApp("Ali","8GB");
echo '<pre>';
print_r($phone);
echo '</pre>';