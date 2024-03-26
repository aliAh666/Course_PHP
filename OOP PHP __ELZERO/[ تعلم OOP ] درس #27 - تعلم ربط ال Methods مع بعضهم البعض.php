<?php

/*
    Methods Chaining
    - when a Class's Methods Return the $this Keyword, They Can Be Chained Together
*/



class ClassName {

    public $name;
    public $email;

    public function pressPower(){
        echo 'You Have Pressed The Power Button <br>';
        return $this;
    }
    
    public function bootPhone(){
        echo 'The Phone is Booting Now...<br>';
        return $this;
    }
    
    public function sayWelcom(){
        echo 'Welcome To Phone<br>';
        return $this;
    }

}

$phone = new ClassName();
// $phone->pressPower();
// $phone->bootPhone();
// $phone->sayWelcom();

$phone->pressPower()->bootPhone()->sayWelcom();
echo '<pre>';print_r($phone);echo '</pre>';

