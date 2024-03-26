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
    - [ Public, Private, Protected ] = Visibility Marker

    
    - [ -> ] mean Object Operator

*/

class Apple_Device{
    // Properties
   public $ram;
   public $inch;
   public $space; 
//    var $camera ; if i delete some Properties * (راجع العلامة اسفل الصفحة)
   var $color ; // Remember var == public
    
}

// Creat A New Object ---> Name of object is iphone13pro
$iphone13pro = new Apple_Device();
// لتغيير خصائص الكائن نستخدم معامل الكائنات ->
$iphone13pro->ram = "4GB";  // عند نداء الخاصية لا يجب وضع علامة دولار لانه عند استخدام معامل الكائنات لا يجب وضع علامة الدولار
$iphone13pro->inch = "6.9 Inch";
$iphone13pro->space = "64GB";
$iphone13pro->camera = "40Mpx";
$iphone13pro->color = "Silver";

// echo "<pre>";
// var_dump($iphone13pro);
// echo "</pre>";

echo "<pre>";
print_r($iphone13pro);
echo "</pre>";


// Creat A New Object ---> Name of object is iphone14pro
$iphone14pro = new Apple_Device();
$iphone14pro->ram = "6GB";
$iphone14pro->inch = "7.1 Inch";
$iphone14pro->space = "128GB";
$iphone14pro->camera = "64Mpx";
$iphone14pro->color = "Gold";

// echo "<pre>";
// var_dump($iphone14pro);
// echo "</pre>";

echo "<pre>";
print_r($iphone14pro);
echo "</pre>";



//--------------------------------------------------------New scenario-------------------------------------------------------------

 // Default Value Of Properties
class Apple_Devices{

   public $ram = "2GB";
   public $inch = "6 Inch";
   public $space = "16 GB"; 
   var $camera = "16 Mpx";
   var $color = "Silver";    

}


// Create A New Object But they take All Default Value Of Properties From Class If you don't modified them
$iphone = new Apple_Devices();
echo "<pre>";
print_r($iphone);
echo "</pre>";

$iphone1 = new Apple_Devices();
echo "<pre>";
print_r($iphone);
echo "</pre>";







/* 
[*] if i delete some Properties in Class and i write code like $iphone14pro->camera = "64Mpx"; (line 64)
when i midifed object Properties the object will add Properties automatical
*/