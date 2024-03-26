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

    - [ $this ] = Pseudo Variable ( المتغير الزائف )  [ Refer To Object Properties ]
*/


class Apple_Device{
    // Properties
        public $ram;
        public $inch;
        public $space; 
        var $camera ;
        var $color ; 

        public $OwnerName;


        // Method : Example 1
        // public function setOwnerName()
        // {
        //     if (strlen($this->OwnerName) < 3) {
        //         echo "Owner Name Cant Be Less Than 3 Chars".'<br>';
        //     }else{
        //         echo "$this->OwnerName.Your Name Has Been Set" .'<br>';
        //     }
        // }

        
        // Method : Example 2
        public function setOwnerName($owner)
        {
            if (strlen($owner) < 3) {
                echo "Owner Name Cant Be Less Than 3 Chars".'<br>';
            }else{
                echo "$owner.Your Name Has Been Set" .'<br>';
            }
        }

    
}

$iphone13pro = new Apple_Device();

$iphone13pro->ram = "4GB";  
$iphone13pro->inch = "6.9 Inch";
$iphone13pro->space = "64GB";
$iphone13pro->camera = "40Mpx";
$iphone13pro->color = "Silver";
// $iphone13pro->OwnerName = "Ali"; // -- Example 1
$iphone13pro->setOwnerName("Ali"); // -- Example 2

// echo "<pre>";
// var_dump($iphone13pro);
// echo "</pre>";

echo "<pre>";
print_r($iphone13pro);
echo "</pre>";


