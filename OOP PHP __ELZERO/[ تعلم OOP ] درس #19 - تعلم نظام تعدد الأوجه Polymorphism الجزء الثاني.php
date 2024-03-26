<?php

/*
    Polymorphism 
    - Have Methods Without Body Code


*/


// <--------------------Example1-------------------->

// interface Mobile {
//     public function pressHome();
// }

// class Iphone implements Mobile{

//     public $name;

//     public function pressHome(){
//         echo 'You Will See Opened Applications';
//     }
// }

// class Sony implements Mobile{

//     public $name;

//     public function pressHome(){
//         echo 'Will Close All Apps';
//     }
// }

// $iphone = new Iphone();
// $iphone->pressHome();
// echo '<pre>';
// print_r($iphone);
// echo '</pre>';


// $sony   = new Sony();
// $sony->pressHome();
// echo '<pre>';
// print_r($sony);
// echo '</pre>';

// <--------------------Example2-------------------->

interface DBConnects{
    public function getUsers();
    public function getArticles();
    public function showStats();
}

class MySQL implements DBConnects{

    public function getUsers(){echo 'SELECT * FROM  users';}
    public function getArticles(){echo 'SELECT * FROM articles';}
    public function showStats(){echo 'SELECT * FROM stats';}
    
}
$row = new MySQL();
$row->getUsers();
$row->getArticles();
$row->showStats();
echo '<pre>';
print_r($row);
echo '</pre>';


class Oracle implements DBConnects{

    public function getUsers(){echo 'Hello FROM  users';}
    public function getArticles(){echo 'Hello FROM articles';}
    public function showStats(){echo 'Hello FROM stats';}
    
}
$row = new Oracle();
$row->getUsers();
$row->getArticles();
$row->showStats();
echo '<pre>';
print_r($row);
echo '</pre>';