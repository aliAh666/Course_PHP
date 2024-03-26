<?php

/*
    Namespace    
*/

require 'Apple.php'; // اسم مجلد انشأتع بمجلد الزيرو بال htdoc
require 'Sony.php';  // اسم مجلد انشأتع بمجلد الزيرو بال htdoc
require 'LG.php';    // اسم مجلد انشأتع بمجلد الزيرو بال htdoc


$iPhone = new Apple\Hardware\Phones\CreatePhone(); 
$iPhone->sayHello();
echo '<pre>';
print_r($iPhone);
echo '</pre>';

$tablet = new Apple\Hardware\Tablets\CreateTablet();
$tablet->sayHello();
echo '<pre>';
print_r($tablet);
echo '</pre>';

// ====================================================

//  محتوى الملف يلي اشتغلنا عليه هالحلقة Apple.php
// <?php

// namespace Apple\Hardware\Phones;

// class CreatePhone{
//     public $name;

//     public function sayHello(){
//         echo 'Hello From Apple Company<br>';
//     }
// }

// // يمكن وضع اكثر من نيمسبيس لكن هذا الامر لا يوصى به

// namespace Apple\Hardware\Tablets;

// class CreateTablet{
//     public $name;

//     public function sayHello(){
//         echo 'Hello From Apple Company<br>';
//     }
// }