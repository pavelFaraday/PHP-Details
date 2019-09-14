<?php 
      // Multi level inheritance - როდესაც სხვადასხვა class (B, C) შეიცავს (extends) სხვადასხვა კლასებს (ანუ არეულად).


    // Parent Class
    class A {
       public $User='Programmer';
       public function myfun(){
            echo "Hey! ".$this->User.", Welcome to my Site.";
       }
    }

    // Child Class
    class B extends A {
       public $User='Web Developer';
    }

    // Child Class
    class C extends B {
        public $User='Full Stack Coder';
    }

    // Without inheritance make object and Call function
    echo '<h3>Without inheritance make object and Call function</h3>';
    $obj = new A();
    $obj->myfun();  // Hey! Programmer, Welcome to my Site.

    echo '</br>';
    echo '<h3>After Inheritance B child class</h3>';
    $Bchild = new B();
    $Bchild->myfun();  // Hey! Web Developer, Welcome to my Site.

    echo '</br>';
    echo '<h3>After Inheritance C child class</h3>';
    $Cchild = new C();
    $Cchild->myfun();  // Hey! Full Stack Coder, Welcome to my Site.

    // 1:13:18mm


    






    
   

?>