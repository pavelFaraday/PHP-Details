<?php 
// Access Modifiers (visibility): PUBLIC    PROTECTED     PRIVATE
/* 
 PUBLIC - public propertie/method u can use everywhere: inside/outside a class or in extended class too.
 PROTECTED - proteceted propertie/method u can use only inside a class or in extended classes.
 PRIVATE - provate propertie/method u can use only inside a class.
*/


// --private $User-- u can use only: inside a class
class A
{
    private $User;
    private function myfun(){
        echo 'Hy Everyone !';
    }
    
    public function secondfun(){
        $this->myfun();
    }
} 

$obj = new A();
$obj->secondfun();


?>