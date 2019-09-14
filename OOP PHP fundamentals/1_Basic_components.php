<?php 
    // make a class or define a class
    class Cars 
    {
        /* // Variables/properties - Members of class
        //assign the values INSIDE the class
        public $Car_Name='MERSEDES';
        public $Car_Color='Green';
        */

        // Variables/properties - Members of class
        public $Car_Name;
        public $Car_Color;


    }

    //make an object of a class
    $Car_Data = new Cars();

    /*
    //call member of a class, which has INSIDE assigned values
    echo $Car_Data->Car_Name; 
    echo '</br>';
    echo $Car_Data->Car_Color;
    */ 
    
    // first time call member of a class and assign the values OUTSIDE the class with string
    echo $Car_Data->Car_Name='BMW'; 
    echo '</br>';
    echo $Car_Data->Car_Color='Black'; 

    echo '</br>'.'</br>';

    // second time call member of a class and assign the values OUTSIDE the class with string
    echo $Car_Data->Car_Name='Audi'; 
    echo '</br>';
    echo $Car_Data->Car_Color='White';

    echo '</br>'.'</br>';

    // third time call member of a class and assign the values OUTSIDE the class with string
    echo $Car_Data->Car_Name='Ferrari'; 
    echo '</br>';
    echo $Car_Data->Car_Color='Red';

    echo '</br>'.'</br>';

    // fourth time call member of a class and assign the values OUTSIDE the class with integers and decimal 
    echo $Car_Data->Car_Name=1010110; 
    echo '</br>';
    echo $Car_Data->Car_Color=17.6;
    

?>