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


        /*if (preg_match("/Daniel/", $string)) {
           echo "It's match";
        }*/

        if (preg_match("/Daniel/", $string, $array)) {
            print_r($array);
        }

        if (preg_match_all("/Daniel/", $string, $array)) {
            print_r($array);
        }

        if (preg_match_all("/Da(ni)el/", $string, $array)) {
            print_r($array);
        }

        if (preg_match_all("/Da(ni)el/", $string, $array)) {
            echo $array[0][1];
        }

        $string2 = preg_replace("/Daniel/", "John", $string);

        echo $string2;
    
    ?>
</body>
</html>