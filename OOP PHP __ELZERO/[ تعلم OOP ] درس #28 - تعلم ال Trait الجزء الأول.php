<?php

/*
    Trait => PHP 5.4
    - A Mechanism For Code Reuse In Single Inheritance Languages Such As PHP.
    - Problem With Extending Classes, Is That U Can Only Extend One. This Is A Little Limiting.
    - With Traits Its Possible For PHP Classes To Inherit Method & Properties Form Multiple Sources.

    - You Cannot Extend Or Implements.
    - You Cannot Instantiate.
    - Its Supporting Class Not Replacing It.
    - Can Have Meethods.
    - Have Priority Over Class
    
*/

// class Iphone {

//     public $feature1;
//     public $feature2;

// }

// class Sony {

//     public $feature3;
//     public $feature4;

// }

// class Nokia {

//     public $feature5;
//     public $feature6;

// }

// class NewPhone extends Iphone{

// }
// $phone = new NewPhone();

// echo '<pre>';print_r($phone);echo '</pre>';


class Iphone1 {

    public $name;
    public $email;

}

$phone = new Iphone1();

echo '<pre>';print_r($phone);echo '</pre>';

