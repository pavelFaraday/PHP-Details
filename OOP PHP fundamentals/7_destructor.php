<?php 
class Data {

public $user = 'Programmer';

// constructor will appear in the browser without calling !!!   
public function __construct(){
    for ($i=0; $i<=10; $i++) { 
        echo 'Your Loop values are: '.$i.'</br>';
    }
} 

// destructor will appear in the browser without calling !
public function __destruct(){
    echo '<br/> We are using DESTRUCTOR <br/>';
 }
}

$obj = new Data();
echo $obj->user;




?>