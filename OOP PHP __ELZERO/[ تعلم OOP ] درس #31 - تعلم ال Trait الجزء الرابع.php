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


// trait MyFeature1{
//     public function feature(){
//         echo 'This Is Feature Number One';
//     }
// }

// trait MyFeature2{
//     public function feature(){
//         echo 'This Is Feature Number Two';
//     }
// }

// class Iphone1 {
//     use MyFeature1,MyFeature2{
//         // Trait Name :: Method Name insteadof Other Method Name

//         // MyFeature2::feature insteadof MyFeature1;
//         #=========OR=========
//         MyFeature1::feature insteadof MyFeature2;
//     }
// }

// $iphone = new Iphone1();
// $iphone->feature();
// echo '<pre>';print_r($iphone);echo '</pre>';

# ============================================04:48 as============================================

trait MyFeature1{
    public function feature(){
        echo 'This Is Feature Number One.<br>';
    }
}

trait MyFeature2{
    public function feature(){
        echo 'This Is Feature Number Two.<br>';
    }
}

class Iphone1 {
    use MyFeature1,MyFeature2{

        // [Trait Name] [::] [Method Name] [as(Keyword)] [New Name]
        MyFeature2::feature as alifeat;

        // [Trait Name] [::] [Method Name] [insteadof(Keyword)] [Other Method Name]
        MyFeature1::feature insteadof MyFeature2;
    }
}

$iphone = new Iphone1();
$iphone->feature();
$iphone->alifeat();
echo '<pre>';print_r($iphone);echo '</pre>';