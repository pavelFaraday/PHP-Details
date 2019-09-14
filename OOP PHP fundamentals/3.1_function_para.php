<?php 
class A 
{   
    public function myfun($a,$b)
    {
        echo 'Name: '.$a.'</br>'.'Surname: '.$b;      
    }
}

class B extends A
{
    public function myfun($a,$b,$c)
    {
        echo 'Name: '.$a.'</br>'.'Surname: '.$b.'</br>'.'Proffesion: '.$c;         
    }
}


$obj = new A();
$obj->myfun('გიორგი', 'ეპიტაშვილი</br></br>'); 


$Bobj = new B(); 
$Bobj->myfun('ლილი', 'იმერლიშვილი', 'PHP Developer'); 


?>