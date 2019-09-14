<?php 
class Data {

  public function __construct(){
    for ($i=0; $i<=10; $i++) { 
      echo 'Your Loop values are: '.$i.'</br>';
    }
  }    
}

$Loop = new Data();
// Your Loop values are: 0
// Your Loop values are: 1
// Your Loop values are: 2
// Your Loop values are: 3
// Your Loop values are: 4
// Your Loop values are: 5
// Your Loop values are: 6
// Your Loop values are: 7
// Your Loop values are: 8
// Your Loop values are: 9
// Your Loop values are: 10
?>