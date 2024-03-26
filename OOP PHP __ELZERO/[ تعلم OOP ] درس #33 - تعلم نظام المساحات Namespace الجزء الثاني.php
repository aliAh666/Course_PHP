<?php

/*
    Namespace    
*/

require 'Apple.php'; // اسم مجلد انشأتع بمجلد الزيرو بال htdoc
require 'Sony.php';  // اسم مجلد انشأتع بمجلد الزيرو بال htdoc
require 'LG.php';    // اسم مجلد انشأتع بمجلد الزيرو بال htdoc


$iPhone = new LG\CreatePhone();
$iPhone->sayHello();
echo '<pre>';
print_r($iPhone);
echo '</pre>';


// محتوى الملف Apple.php
// <?php

// namespace Apple;

// class CreatePhone{
//     public $name;

//     public function sayHello(){
//         echo 'Hello From Apple Company<br>';
//     }
// }

// ======================================

// محتوى الملف Sony.php
// <?php

// namespace Sony;

// class CreatePhone{
//     public $name;

//     public function sayHello(){
//         echo 'Hello From Sony Company<br>';
//     }
// }

// ======================================

// محتوى الملف LG.php
// <?php

// namespace LG;

// class CreatePhone{
//     public $name;

//     public function sayHello(){
//         echo 'Hello From LG Company<br>';
//     }
// }