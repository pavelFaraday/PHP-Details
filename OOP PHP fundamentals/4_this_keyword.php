<?php 

class Cars 
{
    public $Car_Name;
    public $Car_Color;

    // call class variable/properties in class method(function)
    public function myfun($A,$B)
    {
        $this->Car_Color=$A; //როდესაც ნორმალურ Method-ში ვიყენებთ ნორმალურ propertie-ს ვიყენებთ $this keyword-ს
        $this->Car_Name=$B;
        return "მე მყავს ".$this->Car_Color." ფერის ".$this->Car_Name.'</br>';
    }

     // call class variable/properties in class method(function)
     public function myfun2($C,$D)
     {
         $this->Car_Color=$C; //როდესაც ნორმალურ Method-ში ვიყენებთ ნორმალურ propertie-ს ვიყენებთ $this keyword-ს
         $this->Car_Name=$D;
         return "მე მყავს ".$this->Car_Color." ფერის ".$this->Car_Name.'</br>';
     }

      // call class variable/properties in class method(function)
    public function myfun3($E,$F)
    {
        $this->Car_Color=$E; //როდესაც ნორმალურ Method-ში ვიყენებთ ნორმალურ propertie-ს ვიყენებთ $this keyword-ს
        $this->Car_Name=$F;
        return "მე მყავს ".$this->Car_Color." ფერის ".$this->Car_Name.'</br>';
    }
}

// Make an Object
$obj = new Cars();

$Data = $obj->myfun('ლურჯი', 'OPEL');
echo $Data;

$Data2 = $obj->myfun2('წითელი', '06');
echo $Data2;

$Data3 = $obj->myfun3('ლურჯი', 'Mersedes');
echo $Data3;









?>