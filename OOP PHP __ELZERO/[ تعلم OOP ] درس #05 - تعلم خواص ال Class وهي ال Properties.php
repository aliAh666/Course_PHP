<?php

/*
    Class & Object
    - Class is a Blueprint That U Can Create Object From
    - Object is a member in The Main Application
    - Class Has Properties ---> Search in google about Reserved word  in php
    - Variable Inside Class = [ Properties ]
    - Variable Outside Class = [ Variable ]
    - [ class ] = Class Keyword
    - [ new ] = New Object Keyword
    - [ Public, Private, Protected ] = Visibility Marker

    Apple
    - Class           = Apple Blueprint Design  
    - Object          = iphone That Chaina Made  
    - Object          = Apple Store 

    Web Aplication Registeration
    - Class           = Code To Add New Member 
    - Object          = The Members  
    - Object          = Web Aplication Registeration

    Blog System
    - Class           = Code To Add New Post, Article, News, Information 
    - Object          = Post, Article, News, Information 
    - Object          = Blog System
*/

class Apple_Device{
    // Properties
   public $ram;   //=>    يجب تعيين نوع علامة الرؤية للمتغير سواء بوبلك او برايفت او بروتكتد(visibility marker)
   public $inch;  //=>    يجب تعيين نوع علامة الرؤية للمتغير سواء بوبلك او برايفت او بروتكتد(visibility marker)
   public $space; //=> Variable Inside Class Call By Propertie
   var $camera ;  // --> var == public 
   var $color ; 
    
}

// Creat A New Object ---> Name of object is iphone13pro
$iphone13pro = new Apple_Device();

echo "<pre>";
var_dump($iphone13pro);
echo "</pre>";


// Creat A New Object ---> Name of object is iphone14pro
$iphone14pro = new Apple_Device();

echo "<pre>";
var_dump($iphone14pro);
echo "</pre>";
