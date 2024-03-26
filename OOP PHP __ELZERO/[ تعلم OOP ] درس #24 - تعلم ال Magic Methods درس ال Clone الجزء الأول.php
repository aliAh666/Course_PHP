<?php

/*
     Magic Methods
    - Method With Special Name Start With Double Underscore [ __ ]
    Magic Method Clone & Clone Keyword:
    - Typical Copy Of Object In PHP Works By Reference.
    Means Both ( Main And Copied ) Object Will Be Interlinked.
*/


class Phone {
    public $name;
    public $email;

    public function __construct($n, $e) {
        $this->name = $n;
        $this->email = $e;
    }
    

}

//---------- Copy By Reference ----------
$main = new Phone("Ali","ali@gamail.com"); 
$copy = $main; // Copy By Reference
// هون خليت الكائن كوبي مرتبط بالكائن ماين والعكس عند اي تغيير باحدهم يتغير الاخر معه

$main->name = "Sayed";
$copy->name = "Mahmoud";
// $main->email = "Osama";

echo '<pre>';print_r($main);echo '</pre>';
echo '<pre>';print_r($copy);echo '</pre>';




//---------- Clon ----------
$main = new Phone("Ali","ali@gamail.com"); 
$copy = clone $main;
// هون اخدت نسخة من الماين وحطيتها بالكوبي وصار الكوبي كائن مختلف عن الماين التغيير في احدهما لا يؤثر على الاخر
$main->name = "Sayed";
$copy->name = "Mahmoud";
// $main->email = "Osama";

echo '<pre>';print_r($main);echo '</pre>';
echo '<pre>';print_r($copy);echo '</pre>';