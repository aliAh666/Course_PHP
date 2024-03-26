<?php

/*
    Class & Object
    - Class is a Blueprint That U Can Create Object From
    - Object is a member in The Main Application
    - Class Has Properties
    - Variable Inside Class = [ Properties ]
    - Variable Outside Class = [ Variable ]
    - [ class ] = Class Keyword
    - [ new ] = New Object Keyword
    - [ -> ] mean Object Operator

    
    - Class Has Properties & Methods 
    - Function In Class = Methods 
    - Function Outside Class = Function 
*/



//      -------------------------------------
//      |   # Methods #                     |
//      | public function functionName(){   |
//      |                                   |    
//      |        }                          |
//      |-----------------------------------|




class Apple_Device{
    // Properties
        public $ram;
        public $inch;
        public $space; 
        var $camera ;
        var $color ; 

        // Method :
        public function doubleHomePressed()
        {
            echo "You Have Pressed Home Button Twice";
        }
    
}


$iphone13pro = new Apple_Device();

$iphone13pro->ram = "4GB";  
$iphone13pro->inch = "6.9 Inch";
$iphone13pro->space = "64GB";
$iphone13pro->camera = "40Mpx";
$iphone13pro->color = "Silver";
$iphone13pro->doubleHomePressed();// استدعاء الميثود من الكلاس خارح الكلاس

// echo "<pre>";
// var_dump($iphone13pro);
// echo "</pre>";

echo "<pre>";
print_r($iphone13pro);
echo "</pre>";

//Creat A New Method

