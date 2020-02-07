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

    ****  $_COOKIE 
    Differens 1: saves information to USER - inside Browser. So, Cookies are usually used for saving information that is not as dangerous for oter people to know about. 
    Differens 2: COOKIE Doesn't ends as soon as you close browser. It has time limit

    ჰაკერები გაცილებით ადვილად აღწევენ Cookie-თნა ვიდრე Session-თან, იმიტომ რომ ინფოს კომპიუტერში ინახავს..

    ****  $_SESSION 
    Differens 1: saves information to USER - inside Server Side. So, We use SESSIONS to make a Website remember Who was logged in our Website. 
    Differens 2: SESSION ends as soon as you close browser.
    როცა ეხება საქმე დალოგინებას (Password და User Name) უნდა გამოიყენო SESSION...
*/  

// How to set cookie -- /time() + 86400/ ნიშნავს კონკრეტულ მომენტს (time()) + 1 დღე (86400ms)). ანუ 1 დღე აქვს ვადა ინფოს შენახვას..
    setcookie("name", "George", time() + 86400);

// How to destroy Cookie - ნეგატივში უნდა ჩავსვათ /time() - 1/, ანუ როგორც კი ჩახურავს ბრაუზერს ინფო წაიშლება...
    setcookie("name", "George", time() - 1);


// How to set Session -- დაკუთხულ ფრჩხილებში რაც წერია არის Session-ის სახელი..
$_SESSION['session-name'] = "Daniel";

    ?>

</body>
</html>