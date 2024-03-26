<?php

/*
     Magic Methods
    - Method With Special Name Start With Double Underscore [ __ ]
    Construct:
    --- Called When Object Is Created
    --- Can Be Inherited
    Destruct:
    --- Called When Object Is Destroyed
    --- Can Be Inherited

*/

class Iphone {
    public $name;
    public $ram;
    public function sayHello($n){
        $this->name = $n;
        echo "Hello User " . $n;
    }
    
    public function __construct($na, $ra){
        $this->name = $na;
        $this->ram = $ra;
        echo "Hello ".$na . " Your Device Ram Is ". $ra;
        // echo "Object Is Created";
    }
}

class Sony extends Iphone{

}

$phone = new Iphone("ali","8G");
// $phone = new Sony();
// $phone->sayHello("ali");
echo '<pre>';
print_r($phone);
echo '</pre>';