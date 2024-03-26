<?php

/*
    Inheritance
*/


class Apple_Device{
    // Properties
        public $ram;
        public $inch;
        public $space; 
        public $color ; 
        public $screen = 'LCD'; 

        // Method 
        public function changSpec($ra, $in, $sp, $co){
            
            $this->ram = $ra;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;

        }
        
}

class Sony extends Apple_Device{
    // Properties

        public $camera ;

         // Method 
         public function changSpeces($ra, $in, $sp, $co, $ca){
            
            $this->ram = $ra;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;
            $this->camera = $ca;


        
    }
}


$iphone13pro = new Apple_Device();
$iphone13pro->changSpec("8GB", "6.9 Inch", "64GB", "Silver");
echo "<pre>"; print_r($iphone13pro); echo "</pre>";


$sony = new Sony();
$sony -> changSpeces("8GB", "6.9 Inch", "64GB", "Silver", "90Mpx");
echo "<pre>"; print_r($sony); echo "</pre>";