<?php 
// Access Modifiers (visibility): PUBLIC    PROTECTED     PRIVATE
// PUBLIC - public propertie/method u can use everywhere: inside/outside a class or in extended class too.
// PROTECTED - proteceted propertie/method u can use only inside a class or in extended classes.
// PRIVATE - provate propertie/method u can use only inside a class.


// --protected $User-- u can use only: inside a class or in extended classes.
class A
{
    protected $User;  // ფროფერთის აუცილებლად უნდა განვუსაზღვროთ access modifier-ი. 
    protected function myfun() { // protected არის ნაგულისხმევი მეთოდისთვის, მაგრამ არა ფროფერთისთვის !!!
        echo 'Your Propertie Value is: '.$this->User; // protected $User use: inside a class
    }

}

class B extends A
{
    public function display() { // public function display()-ში უნდა გამოვიყენოთ, რომ $User გამოიტანოს
        $this->User='PHP develeoper (protected $User in Extended B class)'; // protected $User use: in EXTENDED a class
        $this->myfun();
    }
}

$Bobj = new B();
$Bobj->display();












?>