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
    ****  $GLOBALS  ---  ანუ რომელ ცვლადსაც ჩასვავ $GLOBALS[]-ში, შემდეგ შეგეძლება ამ ცვლადის ნებისმიერ ფუნქციაში გამოყენება, პარამეტრების ფრჩხილებში ჩასმის გარეშე...
    
    ****  $_GET ----  ანუ submit-ს რო ვაჭერთ name-სა და value-ში რაცაა მითითებული გამოაქვს URL-ში.
    მაგ:  http://localhost/PHP_tutors_mmtus/index_26_GET&POST.php?name33=value777
    name33=value777  -----  გამოიტანა ეს

    ****  $_POST  ----- submit-ს რო ვაჭერთ name-სა და value-ში რაცაა მითითებული არ გამოაქვს URL-ში. თუმცა იგულისხმება, რომ ის იქ არის. უბრალოდ user-ს არ უჩვენებს.

    $_COOKIE
    $_COOKIE
    $_SESSION
*/  
    ?>

    <form method="GET">
        <input type="hidden" name="name33" value="value777">
        <button type="submit">Press Me - GET!</button>
    </form>

    <form method="POST">
        <input type="hidden" name="name000" value="value111">
        <button type="submit">Press Me TOO - POST!</button>
    </form>


</body>
</html>