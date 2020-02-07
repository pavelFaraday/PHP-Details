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

    // ცვლადი $x მოწმდება switch-ის ფრჩხილებში switch($x), case 1 - ანუ იმ შემთხვევაში თუ $x უდრის 1-ს - დაწერე "The answer is 1"; და გაწყვიტე შემოწმების მცდელობა (break). default - გამოიტანს იმ შემთხვევაში თუ არც ერთი არ დაემთხვევა.

        $x = "number";

        switch ($x) {
            case 1:
                echo "The answer is 1";
            break;
            case "number":
                echo "The answer is number";
            break;
            default:
                echo "There is no answer";
        }
    ?>


</body>
</html>