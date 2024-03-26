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

    
    - [ CONSTANT ] يفضل اكتب اسم الثابت بحيث تكون كل الاحرف كبيرة
    - [ :: ] = Scope Resolution Operator
    - اذا اردت طباعة الثابت خارج الكلاس لاي سبب من الاسباب تكتب
    - echo Apple_Device::OWNERNAME;
    - او باستخدام طريقة ثانية وهي من خلال اسم الكائن object
    - echo $iphone13pro::OWNERNAME;
*/


class Apple_Device{
    // Properties
        public $ram;
        public $inch;
        public $space; 
        var $camera ;
        var $color ; 
        public $OwnerName;

        //Constant
        // const CONSTATNAME = 'Value';
        // const CHIP = 'SnapDragon';
        const OWNERNAME = 3;

        // Method 
        public function setOwnerName()
        {
            if (strlen($this->OwnerName) < self::OWNERNAME) {  
                // self::OWNERNAME === Apple_Device::OWNERNAME  
                // <==> 
                //if (strlen($this->OwnerName) < Apple_Device::OWNERNAME)
                echo "Owner Name Cant Be Less Than ". self::OWNERNAME . " Chars".'<br>';
            }else{
                echo "$this->OwnerName.Your Name Has Been Set" .'<br>';
            }
        }

    
}

$iphone13pro = new Apple_Device();

$iphone13pro->ram = "4GB";  
$iphone13pro->inch = "6.9 Inch";
$iphone13pro->space = "64GB";
$iphone13pro->camera = "40Mpx";
$iphone13pro->color = "Silver";
$iphone13pro->OwnerName ="allli";
$iphone13pro->setOwnerName();



echo "<pre>";
print_r($iphone13pro);
echo "</pre>";


// طباعة الثابت خارج الكلاس
echo Apple_Device::OWNERNAME;
echo"<br>";
// طباعة الثابت خارج الكلاس طريقة ثانية
echo $iphone13pro::OWNERNAME;