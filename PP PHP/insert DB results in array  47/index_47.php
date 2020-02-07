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

        $sql = "SELECT * FROM `users`;";
        $result = mysqli_query($conn, $sql);
        $datas = array();

        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
               $datas[] = $row;
            }
        }

        // print_r($datas);

        foreach ($datas[0] as $data) {
            echo $data."<br>";  // print hole data in 1 row ([0])
        }

        foreach ($datas as $data) {
            echo "<br>".$data['user_email'];  // print hole data in 1 column (user_email)
        }
    ?>
    
</body>
</html>