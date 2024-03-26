<?php

/*
    Namespace    
*/

require "class.Testing.php"; // اسم مجلد انشأتع بمجلد الزيرو بال htdoc

class Testing{
    public $email;
}

$object = new Testing();

echo '<pre>';
print_r($object);
echo '</pre>';

// اغلب الدرس عبارة عن شرح نظري الاكواد في الدرس القادم