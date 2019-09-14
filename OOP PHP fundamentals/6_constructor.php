<?php 
class Data {
    // make a construct or special method  
    // constructor will appear in the browser without calling !!!   
    public function __construct(){
    echo 'We are using Constructor';      
  }
}

// OUTPUT: We are using Constructor
// constructor-ის გამოყენების შემთხვევაში, მასში ჩადებული ბრძანება გამოტანისას საჭიროებს მხოლოდ object-ის შექმნას და არ საჭიროებს თავად ფუნქციის მოხმობას. (შესადარებლად გადახედე 4-5 გაკვეთილებს!)
$display = new Data(); 


?>