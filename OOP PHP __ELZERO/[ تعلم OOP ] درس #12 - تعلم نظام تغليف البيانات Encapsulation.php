<?php

/*
    Encapsulation
*/

use Apple_Device as GlobalApple_Device;

class Apple_Device{
    // Properties
        public $ram;
        public $inch;
        public $space; 
        var $color ; 
        private $password; // بمثالو مستخدم اسم lock

        // Method 
        public function changSpec($ra, $in, $sp, $co){
            
            $this->ram = $ra;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;

        }
        
        public function changeLock($ha_sh){
            $this->password = sha1($ha_sh);
        }

    
}

$iphone13pro = new Apple_Device();

$iphone13pro -> changSpec("8GB", "6.9 Inch", "64GB", "Silver");

$iphone13pro -> changeLock("alii@123");

// $iphone13pro -> password = "Ali@123";
// echo $iphone13pro -> password;


echo "<pre>";
print_r($iphone13pro);
echo "</pre>";

$iphone14pro = new Apple_Device();
$iphone14pro -> changSpec("4GB", "7 Inch", "60Mpx", "Gold");

echo "<pre>";
print_r($iphone14pro);
echo "</pre>";




