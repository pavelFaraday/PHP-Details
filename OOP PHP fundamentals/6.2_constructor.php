<?php 
class Data {
    // make a construct or special magic method with parametres   
    public function __construct($A){
    echo 'We are using '.$A;      
  }
}


// constructor-ის გამოყენების შემთხვევაში, მასში ჩადებული ბრძანება გამოტანისას საჭიროებს მხოლოდ object-ის შექმნას. // პარამეტრს ვუთითებთ შემდეგ ადგილებში:  *** __construct($A){} *** | *** $obj = new Class('parameter'); *** //

$display = new Data('OOP PHP Aproach'); 
echo '</br>';
$display1 = new Data('HTML5 & CSS3'); 
// OUTPUT: We are using OOP PHP Aproach - გამოიტანს ორივეს, ახალ ცვლადად არ აღიქვავს !
// OUTPUT: We are using HTML5 & CSS3 - გამოიტანს ორივეს, ახალ ცვლადად არ აღიქვავს !

// 46:12mm


?>