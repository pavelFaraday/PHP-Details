<?php 
    // simple inheritance
    // Parent Class or Main class
    class A {
        public $User;
        public function myfun(){
            echo ' Wellcome to my Website </br>'.$this->User;
        }
    }

    // when we want to use class A code (properties and methods) in class B, We use /extends/ keyword..
    // B class is abled to use A classes properties and methods
    // Child Class
    class B extends A {
        public $User = 'Programmer';
    }

    // We make objects of child class, that have /extends/ keyword..
    $obj = new B();
    $obj->myfun();  // echo უკვე განსაზღვრული გვაქვს ზემოთ class A-ში

?>