<?php

/*
    Inheritance Override & Traning
*/


class Apple_Device{
    // Properties
        public $ram;
        public $inch;
        public $space; 
        public $color ; 
        public $screen = 'LCD';

        public $name; 
        public $price = "$400"; 

        // Method 
        public function changSpec($ra, $in, $sp, $co, $na){
            
            $this->ram = $ra;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;

        }
        public function seyHello($n){
            $this->name = $n;
            echo "Welcom to ". $n;
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


    public function seyHello($n){
        $this->name = $n;
        echo "Welcom to ". $n . " This Phone Has " . $this->ram . " Ram";
    }
}


$iphone13pro = new Apple_Device();
$iphone13pro->changSpec("8GB", "6.9 Inch", "64GB", "Silver", "Apple");
$iphone13pro->seyHello("iPhone");
echo "<pre>"; print_r($iphone13pro); echo "</pre>";

$iphone14pro = new Apple_Device();
$iphone14pro->changSpec("12GB", "7.1 Inch", "128GB", "Gold", "Apple");
$iphone14pro->seyHello("iPhone");
$iphone14pro->price = "$600";
echo "<pre>"; print_r($iphone14pro); echo "</pre>";



$sony = new Sony();
$sony -> changSpeces("8GB", "6.9 Inch", "64GB", "Black", "90Mpx", "Sony");
$sony->seyHello("Sony");
echo "<pre>"; print_r($sony); echo "</pre>";