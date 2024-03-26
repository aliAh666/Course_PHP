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
    - If we mark a class function as abstract, we have to define the class as abstract as well
    - abstract methods in the abstract classes can't be private because the child classes must be able to access them
    - Removing the Abstraction Class will not effect the child classes
    -  If the abstract method in abstract class is not Static, then we can't make it static in the child class
    - Methods in child class can't be better than the methods in parent class in security OR visibility.(private, protected, public)
        Example: line ( 82 )
        

    * Rules TO Go On
    * Force Developer To Follow Your Methods
*/

abstract class MakeDevice{

    abstract public function testPerformence();
    abstract public function verifyOwner();  
    abstract public function sayWelcome($n);  
}

class iPhone extends MakeDevice{

    public $owner;

    public function testPerformence()
    {
        echo 'Performence Is Good 100%';
    }
    public function verifyOwner()
    {
        echo 'Owner Is Verfied';
    }
    
    public function sayWelcome($s)
    {
        $this->owner = $s;
        echo 'Welcome '. $s;
    }
}

class iPad extends MakeDevice{
    
    public $owner;
    
    public function testPerformence()
    {
        echo 'Performence Is Good 100%';
    }
    public function verifyOwner()
    {
        echo 'Owner Is Verfied';
    }
    
    public function sayWelcome($x)
    {
        $this->owner = $x;
        echo 'Welcome '. $x;
    }
        
}


$iphone = new iPhone();
$iphone->sayWelcome("Ali");
echo "<pre>"; print_r($iphone); echo "</pre>";

$ipad = new iPad();
$ipad->sayWelcome("Ahmad");
echo "<pre>"; print_r($ipad); echo "</pre>";


// <-----------------------------Example----------------------------->
// abstract class Father{
//     abstract public /*static*/ function speak();
//    }
// class son extends Father{
//     public static function speak() {
//      echo 'Son is speaking';
//     }
//    }
// $a = new son();
// $a->speak();