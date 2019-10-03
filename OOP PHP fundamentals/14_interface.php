<?php 
/*
-- interface is a similar lika abstract.
-- abstract class - in abstract class we can make both, complete and incomplete methods.
-- interface class - in interface class we can make only incomplete methods, then you will implement (complete) the class to access an incomplete method.
-- In interface class, Methods have abstract keyword by default !! Therefor methods are incomplete (abstract means incomplete)..
-- if you make complete method (with body - curly bracket {}) in Interface, there will be ERROR !! 
-- You can make multiple interfaces and implement them all in one single class !!
*/

// make Interface 1
interface MyDemo
{
    public function myfun(); 
}

// make Interface 2
interface MyDemo1
{
    public function myfun1(); 
    class Daga {
        echo '<h1>Hy, Everyone...</h1></br>';
    }
}

// make Interface 3
interface MyDemo2
{
    public function myfun2(); 
}

// class Data implements interface MyDemo,MyDemo1 and MyDemo2..
class Data implements MyDemo,MyDemo1,MyDemo2
{
    public function myfun(){
        echo '<h1>Hy, Everyone...</h1></br>';
    }
    public function myfun1(){
        echo '<h2>I am Gorge.</h2></br>';
    }
    public function myfun2(){
        echo '<h3>I am PHP Developer.</h3>';
    }
}

$obj = new Data();
$obj->myfun();
$obj->myfun1();
$obj->myfun2();


?>