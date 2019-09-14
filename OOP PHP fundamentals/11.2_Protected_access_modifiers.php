<?php 
// Access Modifiers (visibility): PUBLIC    PROTECTED     PRIVATE
// PUBLIC - public propertie/method u can use everywhere: inside/outside a class or in extended class too.
// PROTECTED - proteceted propertie/method u can use only inside a class or in extended classes.
// PRIVATE - provate propertie/method u can use only inside a class.


// --protected $User-- u can use only: inside a class or in extended classes.
class A
{
    protected $User;
    protected function myfun(){
        echo 'Your Propertie Value is: '.$this->User; // protected $User use: inside a class
    }

    // ანუ protected $User გამოვიყენეთ public function display()-ში და ქვემოთ - გამოძახებისას სწორედ ამიტომ მოგვცა გამოტანის საშუალება. (იხ. $obj->display()). ანუ თუ ჩვენ protected properties გამოვიყენებთ იმავე class-ის public მეთოდში-ში, მაშინ ბრაუზერი გამოძახებისას მას გამოიტანს ანუ გახდის ხილვადს.
    public function display(){
        $this->User='MAGENTO'; // protected $User use: inside a class
        $this->myfun();
    }
}

$obj = new A();
// $obj->User='Web Master (public in Simple class).</br>'; //protected $User use: ERROR->WE CAN'T USE PROTECTED OUTSIDE a CLASS!!
$obj->display();










?>