<?php 
/* 
 Access Modifiers (visibility): PUBLIC    PROTECTED     PRIVATE
 
 PUBLIC - public propertie/method u can use everywhere: inside/outside a class or in extended class too.
 PROTECTED - proteceted propertie/method u can use only inside a class or in extended classes.
 PRIVATE - provate propertie/method u can use only inside a class.
*/


// --private $User-- u can use only: inside a class
class A
{
    private $User;

    /* 
    თუ გინდა, რომ private property გამოიტანო class-ის გარეთ უნდა გამოიყენო:
    1) setter & getter  
    ან 
    2) ან განვსაზღვროთ public ფუნქციაში (იხ. გაკვეთილი: 11.3.1_Private_access_modifiers და 11.3.2_Private_access_modifiers)

    1) setter & getter: 
    A step) set a public function/method - აქ $User-ს ახალ მნიშვნელობას ვანიჭებთ მეთოდის პარამეტრის საშუალებით
    B step) get a public function/method - აქ უკვე setter-ში ახლად განსაზღვრული და ჩატრიალებული $User-ის საშუალებით გამოსატან/მისაღებ ჩვენთვის სასურველ ფუნქციას ვაგებთ.
    */

    public function setData($a){
        $this->User = $a;
    }

    public function getData(){
        return 'Your Data is '.$this->User;
    }
} 

$obj = new A();
// echo $obj->User='Web master';  // We can't use PRIVATE $User OUTSIDE a class - it will be ERROR !!!

$obj->setData('PRIVATE'); // 1) set $a value (PRIVATE)
echo $obj->getData();  // 2) get $a value thet we setted in first function






?>