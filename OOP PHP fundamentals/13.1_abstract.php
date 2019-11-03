<?php 

abstract class Pet 
{
    abstract function talk();
    abstract function sleep();

}

class Dog extends Pet 
{
    function talk()
    {
        // ..Code here
    }

    function sleep()
    {
        // ..Code here
    }
}

class Cat extends Pet 
{
    function sleep()
    {
        // ..Code here
    }

    function talk()
    {
        // ..Code here
    }

}

$dog = new Dog();



?>