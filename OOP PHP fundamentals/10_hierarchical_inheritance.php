<?php 
     // HIERARCHICAL INHERITANCE
    // ანუ როდესაც ერთ PARENT class-ს (ამ შემთხვევაში A class-ს) შეიცავს (extends) რამდენიმე child class-ი   (ამ შემთვევაში B,C, და D class-ები).

    class A
    {
        public $User=' Web Designer ';
        public function myfun(){
            echo '</br>'.'</br>'."Hey! Welcome to my Site".$this->User;
        }
    }

    class B extends A
    {
        public $User=' FrontEndProgrammer';
    }

    class C extends A
    {
        public $User=' JAVA C#';
    }

    class D extends A
    {
        public $User=' PhotoShop CS6';
    }

    // Make A class Object
    echo '<h3>A Class Data</h3>';
    $obj = new A();
    echo $obj->User;
    $obj->myfun();

    // Make B Class object
    echo '<h3>B Class Data (B extends A)</h3>';
    $Bobj = new B();
    echo $Bobj->User;
    $Bobj->myfun();

    // Make C Class object
    echo '<h3>C Class Data (C extends A)</h3>';
    $Cobj = new C();
    echo $Cobj->User;
    $Cobj->myfun();

    // Make D Class object
    echo '<h3>D Class Data (D extends A)</h3>';
    $Dobj = new D();
    echo $Dobj->User;
    $Dobj->myfun();


?>