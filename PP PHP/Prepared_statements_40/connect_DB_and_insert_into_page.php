<?php 
    include_once 'includes/dbh.inc.php';
?>

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
    //  Prepared statements - insert data into Page from DB <<<<

        // 1) ვქმნით ცვლადს, რომელიც შეინახავს იმ ინფოს, რომელსაც ბოლოში დასერჩავს placeholder-ის მაგივრად DB-ში..
        $data1 = "Admin";
        $data2 = "Daniel";
        // 2) created a template
        $sql = "SELECT * FROM `users` WHERE user_uid=? AND user_first=?;";
        // 3) Create a prepared statements
        $stmt = mysqli_stmt_init($conn);
        // 4) Prepare a Prepared Statement
        // 
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "SQL statement failed!";
        } else {
            // 5) Bind parametres to a placeholder (user_uid=? AND user_first=?).. ანუ გვაქვს ორი placeholder-ი, ამიტომაც გვაქვს ორი s დაბლა ფუნქციაში ("ss")... ერთი placeholder-ი რომ გვქონოდა მაშინ გვექნებოდა ერთი s ("s")..
            mysqli_stmt_bind_param($stmt, "ss", $data1, $data2);
            // 6) Run/Execute Parameters inside DB
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['user_id']."<br>";
                echo $row['user_first']."<br>";
                echo $row['user_last']."<br>";
                echo $row['user_email']."<br>";
                echo $row['user_uid']."<br>";
                echo $row['user_pwd']."<br>";
            }
        }
    ?>
    
</body>
</html>