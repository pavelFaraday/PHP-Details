<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $string = "My name is Daniel, Daniel is my name.";

        // echo preg_match("/Daniel/", $string); // result: 1... because the $string where we searched for "Daniel" consists  and this is true;

        // echo preg_match("/./", $string); // result: 1... because the $string consists characters and this is true;

        // echo preg_match("/(a|y)/", $string); // result: 1... because the $string consists "a" OR "y" too and this is true;

        // echo preg_match("/[^abc]/", $string); // result: 1... because the $string doesnt consists only "abc" and this is true;
        
        // echo preg_match("/[^My name is Daniel, Daniel is my name.]/", $string); // result: 0... because the $string consists only the same characters - "My name is Daniel, Daniel is my name." and this is folse;

        // echo preg_match("/[a-zA-Z]/", $string); // result: 1... because the $string consists lowercase and Uppercase characters too - and this is true;

        // echo preg_match("/[0-9]/", $string); // result: 0... because the $string doesn't consists numbers - "My name is Daniel, Daniel is my name." and this is folse;

        // echo preg_match("/D*/", $string); // result: 1... because the $string consists D and this is true;

// ================================================================================================================

        /*preg_match_all("/D/", $string, $array);
        print_r($array);*/ 
        // result: Array ( [0] => Array ( [0] => D [1] => D ) ) because it has two D

        // preg_match_all("/D*/", $string, $array);
        // print_r($array); 
        // result: Array ( [0] => Array ( [0] => [1] => [2] => [3] => [4] => [5] => [6] => [7] => [8] => [9] => [10] => [11] => D [12] => [13] => [14] => [15] => [16] => [17] => [18] => [19] => D [20] => [21] => [22] => [23] => [24] => [25] => [26] => [27] => [28] => [29] => [30] => [31] => [32] => [33] => [34] => [35] => [36] => [37] => ) )

        // preg_match_all("/D.*y/", $string, $array);
        // print_r($array); 
        // result: Array ( [0] => Array ( [0] => Daniel, Daniel is my ) )  
        // it starts search from "D" and only from first "D" ands with "y"

        // preg_match_all("/D+/", $string, $array);
        // print_r($array);
        // result: Array ( [0] => Array ( [0] => D [1] => D ) ) 

        // preg_match_all("/D.+/", $string, $array);
        // print_r($array);
        // result: Array ( [0] => Array ( [0] => Daniel, Daniel is my name. ) )

// ================================================================================================================

        $string2 = "My 1name2 is Daniel, 1Daniel2 is my name.";

        // preg_match_all("/1.*2/", $string2, $array);
        // print_r($array);
        // result: Array ( [0] => Array ( [0] => 1name2 is Daniel, 1Daniel2 ) )
        // from first 1 until last 2... so, 1...name2 is Daniel, 1Daniel...2

        // preg_match_all("/1.*?2/", $string2, $array);
        // print_r($array);
        // result: Array ( [0] => Array ( [0] => 1name2 [1] => 1Daniel2 ) )
        // searchs only characters, that starts form 1 and ands 2

// ================================================================================================================

        // $string = "My name is Daniel, Daniel is my name.";

        // echo preg_match("/D{2}/", $string, $array);
        // // result: 0, false
        // // search for specific number of "D", Which are written one after another

        // $string3 = "My name is Daniel, DDDaniel is my name.";

        // echo preg_match("/D{3}/", $string3, $array);
        // // result: 1, true
        // // search for specific number of "D", Which are written one after another

        // echo preg_match("/D{1,3}/", $string3, $array);
        // // result: 1, true
        // // search 1 OR 3 of "D", Which are written one after another

        // echo preg_match("/D{1,}/", $string3, $array);
        // // result: 1, true
        // // search 1 OR more of "D", Which are written one after another

        // $string4 = "MynameisDaniel,DDDanielismyname.";

        // echo preg_match("/\s{1,}/", $string4, $array);
        // // result: 0, false because it doesn't have white-space characters
        // // search white-space characters

        // echo preg_match("/\S{1,}/", $string4, $array);
        // // result: 0, false because it has NON-white-space characters
        // // search NON-white-space characters

        // echo preg_match("/\d{1,}/", $string4, $array);
        // result: 0, false because it doesn't have digit characters
        // search Digit characters

        // echo preg_match("/\D{1,}/", $string4, $array);
        // result: 0, false because it has NON-digit characters
        // search NON-Digit characters

// ==================================================================================================================

        $string5 = "My 1name2 is Daniel, 1Daniel2 is my name";

        // echo preg_match("/^M/", $string5);
        // result: 1, true.  Because the string starts with Capitalized "M"

        // echo preg_match("/e$/", $string5);
        // result: 1, true.  Because the string ends with lowercase "e"

        // echo preg_match("/^M.*e$/", $string5);
        // result: 1, true.  Because the string starts with Capitalized "M" and ends with lowercase "e"

// ==================================================================================================================

        $string6 = "^My name is Daniel, Daniel is my name";

        echo preg_match("/\^.*e$/", $string6);
        // result: 1, true.  Because the string starts with "^"
// ==================================================================================================================






    
    ?>
</body>
</html>