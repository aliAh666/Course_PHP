<?php

/*
    Traning For Using Methods With Parameters
*/

use Apple_Device as GlobalApple_Device;

class Apple_Device{
    // Properties
        public $ram;
        public $inch;
        public $space; 
        var $camera ;
        var $color ; 

        // Method 
        public function changSpec($in, $sp, $ca, $co, $ra = NULL){
            
            $this->inch = $in;
            $this->space = $sp;
            $this->camera = $ca;
            $this->color = $co;
            if ($ra === null) {
                $ra = "4GB";
                $this->ram = $ra;
            }else{

                $this->ram = $ra;
            }
        }

    
}

$iphone13pro = new Apple_Device();

$iphone13pro -> changSpec("6.9 Inch", "64GB", "40Mpx", "Silver", "8GB");

echo "<pre>";
print_r($iphone13pro);
echo "</pre>";

$iphone14pro = new Apple_Device();
$iphone14pro -> changSpec("7 Inch", "128GB", "60Mpx", "Gold");

echo "<pre>";
print_r($iphone14pro);
echo "</pre>";




