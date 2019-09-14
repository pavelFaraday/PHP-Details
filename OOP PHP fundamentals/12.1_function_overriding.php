<?php 
// function/method overriding(გადაფარვა) - hide first function/method with second function/method in extends class. ამისთვის უნდა შევქმნათ მეორე class და extends-ის საშუალებით მოვიცვათ მშობელი class. ამის შემდეგ უნდა გადავიტანოთ იგივი ფუნქცია /myfun()/ შეცვლილი მნიშვნელობით /echo 'I am child class function/method'/

class A 
{   
    public function myfun(){
        echo 'I am parent class function/method';      
    }
}

class B extends A
{
    public function myfun(){
        echo 'I am child class function/method';            
    }
}


$obj = new B(); 
$obj->myfun(); // OUTPUT: I am child class function/method 


?>