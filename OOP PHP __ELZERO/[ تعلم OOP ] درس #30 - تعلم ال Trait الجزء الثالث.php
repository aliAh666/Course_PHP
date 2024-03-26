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

// trait FingerPrint {
//     public function fingerFeature(){
//         echo 'This Has Finger Print Feature.<br>';
//     }
// }

// trait ThreeDimensionTouch {
//     public function ThreeD(){
//         echo 'This Has 3D Touch Feature.<br>';
//     }
// }

// trait FaceDetect {
//     public function faceFeature(){
//         echo 'This Has Face Detect Feature.<br>';
//     }
// }

// trait AllFeatures{
//     use FingerPrint, ThreeDimensionTouch, FaceDetect;
// }


// class Iphone1 {
//     use AllFeatures;
//     public function sayHello(){
//         echo 'Hello From Iphone';
//     }
// }

// class Sony{
//     use FaceDetect;
//     public function sayHello(){
//         echo 'Hello From Sony';
//     }
// }

// class Nokia{
//     public function sayHello(){
//         echo 'Hello From Nokia';
//     }
// }

// $iphone = new Iphone1();
// $iphone->fingerFeature();
// $iphone->ThreeD();
// $iphone->faceFeature();
// $iphone->sayHello();
// echo '<pre>';print_r($iphone);echo '</pre>';



// $sony = new Sony();
// $sony->faceFeature();
// $sony->sayHello();
// echo '<pre>';print_r($sony);echo '</pre>';

// $nokia = new Nokia();
// $nokia->sayHello();
// echo '<pre>';print_r($nokia);echo '</pre>';


# ============================================03:30============================================

// trait FingerPrint {
//     public function fingerFeature(){
//         echo 'This Has Finger Print Feature.<br>';
//         return $this;
//     }
// }

// trait ThreeDimensionTouch {
//     public function ThreeD(){
//         echo 'This Has 3D Touch Feature.<br>';
//         return $this;
//     }
// }

// trait FaceDetect {
//     public function faceFeature(){
//         echo 'This Has Face Detect Feature.<br>';
//         return $this;
//     }
// }

// trait AllFeatures{
//     use FingerPrint, ThreeDimensionTouch, FaceDetect;
// }


// class Iphone1 {
//     use AllFeatures;
//     public function sayHello(){
//         echo 'Hello From Iphone';
//         return $this;
//     }
// }

// class Sony{
//     use FaceDetect;
//     public function sayHello(){
//         echo 'Hello From Sony';
//         return $this;
//     }
// }

// class Nokia{
//     public function sayHello(){
//         echo 'Hello From Nokia';
//         return $this;
//     }
// }

// $iphone = new Iphone1();
// $iphone->fingerFeature()->ThreeD()->faceFeature()->sayHello();
// echo '<pre>';print_r($iphone);echo '</pre>';



// $sony = new Sony();
// $sony->faceFeature()->sayHello();
// echo '<pre>';print_r($sony);echo '</pre>';

// $nokia = new Nokia();
// $nokia->sayHello();
// echo '<pre>';print_r($nokia);echo '</pre>';

# ============================================04:48 الأولوية ============================================

trait MyFeature{
    public function sayHello(){
        echo 'Hello From Trait';
    }
}

class AppleDevice{
    public function sayHello(){
        echo 'Hello From Class';
    }
}

class Iphone1 extends AppleDevice{
    use MyFeature;
}

$iphone = new Iphone1();
$iphone->sayHello();
echo '<pre>';print_r($iphone);echo '</pre>';
