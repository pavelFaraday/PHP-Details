<?php 
// Abstract classes - means incompelete class, you can't make an object of this class.
// There will be Error, if you make object of abstract class !!!
// You need to make another class, which Extends abstract class

// Abstract can be Method/function too - it we can't complete with curly bracket {};
// In abstract class we can make both, complete and incomplete methods..
// You need to make another class, which Extends this Incomplete abstract Method 


abstract class MyClass
{
    // Complete Method
    public function myfun(){
        echo 'This is Abstract Class</br>';
    }

    // Incomplete abstract Method - we can't complete with curly bracket {};
    public abstract function incomplete();
}



class Complete extends MyClass
{
    public function incomplete(){
        echo 'I am Complete Method/function';
    }
}

/*
// There will be Error, if you make object of abstract class !!!
$obj = new MyClass();
$obj->myfun(); // ERROR
*/

$obj2 = new Complete();
$obj2->myfun(); // OUTPUT: This is Abstract Class
$obj2->incomplete();

?>