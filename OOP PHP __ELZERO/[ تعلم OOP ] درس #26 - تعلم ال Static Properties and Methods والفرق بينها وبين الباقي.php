<?php

/*
    [ Static Keyword ]

    - Static Properties/Method are Used to Access Properties/Method in Global Scope
    
    - Declaring class Properties or Methods as Static
    Make Them Accessible Without Needing an Instantiation of the class
    - Because Static Methods are Callable Without an Instance of the Object Created,
    the Pseudo-Variable $this is not available Inside The Method Declared as Static
    - A Property Declared as Static Cannot be Accessed
    With an Instantiated Class Object ( Though a static Method Can ).
    - " One of the Major Benefits to Using Static Properties
    is That They Keep Their Stored Values For The Duration of The Scripts. "

    -Static properties are accessed using the Scope Resolution Operator (::)
     and cannot be accessed through the object operator (->).


1- نقدر ندخل ال إستاتيك بروبيراتي او الميثوت من اي مكان 
2- لو بداخل الكلاس قمت بعمل  بروبيراتي او ميثوت  استاتيك اقدر ادخل عليهم من غير الحاجه الي إنشاء اوبجيكت جديد للكلاس
3- عشان الاستاتبك ميثوت مش محتاجه اني اعمل اوبجيكت جديد فبالتلي اي ميثوت ماينفعش استخدم فيها $this لانها هتبقي عايده للاوبجيكت اللي هو اساسا مش موجود
4- البوربيرتي اللي انت عاملها استاتيك ماينفعش نأكسس عليهم لو انا عملت من الكلاس اوبجيكت جديد لكن لو ميثوت هتقدر تأكسس عليها عادي
5- القيمه بتاعت الاستاتيك بتفضل متخزنه طول الوقت في الاسكريبت طول ما انت شغال بيه
   
*/



class ClassName {
    public static $name = 'Osama';
    public static $ram = '2GB';

    public static function sayHello(){
        return 'Hello';
    }
}

/*-Static properties are accessed using the Scope Resolution Operator (::)
     and cannot be accessed through the object operator (->). */

echo ClassName::$name . '<br>';
echo ClassName::$ram . '<br>';
echo ClassName::sayHello();

// ------------------------------------------------------------

/* - A Property Declared as Static Cannot be Accessed
 With an Instantiated Class Object ( Though a static Method Can ).
*/

class ClassName2 {
    public static $name = 'Osama';
    public static $ram = '2GB';

    public static function sayHello(){
        return 'Hello';
    }
}


$phone = new ClassName2();
// echo $phone->name; // خطأ  Accessing static property Iphone::$name as non static وهيي ستاتيك
echo $phone->sayHello(); //صح
echo ClassName2::sayHello(); //صح





// difference between Const  & Static ?

// class ClassName3 {
//     public static $my_var = 10;  /* defaults to public unless otherwise specified */
//     const MY_CONST = 5;
// }
// echo ClassName3::$my_var . '<br>';   // returns 10
// echo ClassName3::MY_CONST . '<br>';  // returns 5

// ClassName3::$my_var = 20;   // now equals 20
// echo ClassName3::$my_var . '<br>';   // returns 20

// ClassName3::MY_CONST = 20;  // error! won't work.
// echo ClassName3::MY_CONST . '<br>';  // error


