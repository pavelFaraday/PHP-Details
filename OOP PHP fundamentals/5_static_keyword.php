<?php 

class Cars 
{
    public $Car_Name;
    public $Car_Color;

    // STATIC properties/variables - They don't need make an object for calling outside a class
    public static $User = 'JABSON LAKOMA';
    public static $Email = 'Jabson@gmail.com';

    // normal method/function
    public function myfun(){
        echo 'Normal Method/Function';
        $this->Car_Name;  // როდესაც ნორმალურ Method-ში ვიყენებთ ნორმალურ propertie-ს ვიყენებთ $this keyword-ს !
        $this->Car_Color;
    }

    // STATIC method/function
    public static function myfun2(){
        self::$User;  // როდესაც STATIC Method-ში ვიყენებთ STATIC propertie-ს ვიყენებთ self:: keyword-ს !
        self::$Email;
        return self::$User.'-ს აქვს შემდეგი მეილი: '.self::$Email.'</br>';
    }
}

// make an Object to call normal properties/variables
$obj = new Cars();
echo '<h2> Normal Class Variables </h2>';
echo $obj->Car_Color='Blue'.' ';
echo $obj->Car_Name='BMW</br>';
echo $obj->myfun();

echo '</br>'.'</br>';

// for calling static properties/variables outside a class, I don't need make an object 
// for calling we need ** Class_name::$propertie **
// for calling static Method outside a class, we need ***Class_name::$method()***
echo '<h2> STATIC Class Variables and Methods</h2>';
echo Cars::myfun2(); 
echo Cars::$User='Jon Doe</br>';
echo Cars::$Email='Programmer23@gmail.com</br>';







?>