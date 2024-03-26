<?php

/*
    Class Abstraction
    - Canot Be Instantiated [ Cannot Create Object From ] مافيك تعمل منو كائنات
      $example = new MakeDevice; Error : [ Cannot instantiate abstract class MakeDevice ]
    - Made For Other Classes To Inherit Properties & Methods From 
    - Can Have Properties & Methods
    - Can Have Abstracted Method And Non Abstracted Methods
    - Abstract [ Methods Contains No Body Code ]
    - Allows defining a parameter inside it
*/

abstract class MakeDevice{

    public $ram;

    public function sayHello(){  // Non Abstracted Method
        echo "Say Hello";
    }

    // abstract public function sayBye(){ # Error -> cannot contain body : { bode }

    // }

    abstract public function sayBye(); // Abstracted Method [ اذا عملت ميثود مجرد اجباري لازم استدعيه بالكلاس الي عم ورّثلو ]
    abstract public function SayTest($parameter);  // Abstracted Method  يقبل بارمتر
}

// class Apple_Device extends MakeDevice{
//         /*
//         يجب الاعلان عن: 
//         function sayBye();
//         SayTest($parameter);
//         */
// }


$iphone13pro = new Apple_Device();

echo "<pre>"; print_r($iphone13pro); echo "</pre>";
