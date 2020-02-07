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
    // connect to DB and insert data into a Website from a DB

        $sql = "SELECT * FROM `users`;";
        $result = mysqli_query($conn, $sql);
        
        // შედეგების შემოწმება: ანუ თუ DB-დან გადმოწერილი ინფო მეტია 0-ზე, თუ არ გადმოწერს 0-ის ტოლი იქნება.

        $resultCheck = mysqli_num_rows($result);

        // ანუ ცვლად $row-ში გადმოგვაქვს/ვინახავთ ინფოს DB-დან array-ს სახით...

        if ($resultCheck > 0) {
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