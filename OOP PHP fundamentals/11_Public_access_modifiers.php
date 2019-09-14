<?php 
// Access Modifiers (visibility): PUBLIC    PROTECTED     PRIVATE
// PUBLIC - public propertie/method u can use everywhere: inside/outside a class or in extended class too.
// PROTECTED - proteceted propertie/method u can use only inside a class or in extended classes.
// PRIVATE - provate propertie/method u can use only inside a class.


// --public $User-- u can use everywhere: inside/outside a class or in extended class too
class A
{
    public $User;
    public function myfun(){
        echo 'Your Propertie Value is: '.$this->User; // public $User use: inside a class
    }
}

class B extends A
{
    public $User=' FrontEndProgrammer (public in Extends class).'; // public $User use:  in extended class
}

$obj = new A();
$obj->User='Web Master (public in Simple class).</br>';  // public $User use:  outside a class
$obj->myfun();

$Bobj = new B();
$Bobj->myfun();








?>