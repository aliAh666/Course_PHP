<?php

/*
    Auto Load Classes    
*/

// require 'classes/Testing1.class.php';  //   htdoc/classes/Testing1.class.php
// require 'classes/Testing2.class.php';  //   htdoc/classes/Testing2.class.php
// require 'classes/Testing3.class.php';  //   htdoc/classes/Testing3.class.php  

spl_autoload_register(function($class) {
    require 'classes/' . $class . '.class.php';
});

$var = new Testing4();
echo '<pre>';
print_r($var);
echo '</pre>';


// ====================================================

// محتوى  Testing1.class.php

// <?php

// class Testing1{
//     public $name;
// }

// ====================================================

// محتوى  Testing2.class.php

// <?php

// class Testing2{
//     public $email;
// }

// ====================================================

// محتوى  Testing3.class.php

// <?php

// class Testing3{
//     public $ads;
// }

// ====================================================

// محتوى  Testing4.class.php

// <?php

// class Testing4{
//     public $ram;
// }