<?php 
class A 
{   
    // constructor overriding(გადაფარვა) - hide first constructor with second constructor in extends class
    // ანუ constructor-ის შედეგების გადაფარვა შესაძლებელია მეორე constructor - Extends-ის საშუალებით
    public function __construct(){
        echo 'This is parent class constructor';      
    }
}

class B extends A
{
    public function __construct(){
        echo 'This is child class constructor';      
    }
}

// $obj = new A();  // OUTPUT: This is parent class constructor
$obj = new B(); // OUTPUT: This is child class constructor

?>