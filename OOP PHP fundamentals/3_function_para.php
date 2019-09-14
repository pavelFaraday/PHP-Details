<?php 

class Cars 
{
    public $Car_Name;
    public $Car_Color;

    // make a function with Parametres
    public function data($C, $N)
    {
        $Car_Color=$C;
        $Car_Name=$N;

        // როდესაც propertie-ს ვატრიალებ ფუნქციაში, ვიყენებ return keyword-ს !!!
        return "მე მყავს ".$Car_Color." ფერის ".$Car_Name;
    }
}

// make an Object
$Cars_Data = new Cars();

// Call function with Parametres
$Data = $Cars_Data->data('შავი', 'BMW');
echo $Data;








?>