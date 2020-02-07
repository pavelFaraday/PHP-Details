<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // Associative Arrays, method 1:
    $data = array (
        array("Giorgo", 56, "Roboto"), 
        "Daniel", 
        "Nielsen", 
        25
    );

    print_r($data);
    echo "<br>".$data[0][2];

    ?>
</body>
</html>