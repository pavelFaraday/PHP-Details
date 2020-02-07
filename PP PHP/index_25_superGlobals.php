<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php

/*
    $GLOBALS  ---  ანუ რომელ ცვლადსაც ჩასვავ $GLOBALS[]-ში, შემდეგ შეგეძლება ამ ცვლადის ნებისმიერ ფუნქციაში გამოყენება, პარამეტრების ფრჩხილებში ჩასმის გარეშე...

    $_POST 
    $_GET
    $_COOKIE
    $_SESSION
*/

$c = 5666;

    function Mythings() {
        $y = 10;
        echo $GLOBALS['c'];
    }
    Mythings();
    
    ?>
</body>
</html>