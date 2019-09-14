<?php 

class Cars 
{
    public $Car_Name;
    public $Car_Color;

    // make a function 1
    public function run(){
        echo 'Car is running now!</br>';
    }

    // make a function 2
    public function stop(){
        echo 'Car is stoped!</br>';
    }
}

// make an Object
$Car = new Cars();

// Call class function 1
$Car->run();

// Call class function 2
$Car->stop();




?>