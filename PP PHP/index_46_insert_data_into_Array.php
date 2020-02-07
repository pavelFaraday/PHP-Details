<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

        // insert Data into empty array - method 1
        $data = array();
        $data[] = "Daniel";
        $data[] = "24";
        // echo $data[0];
        print_r($data);


        // insert Data into empty array - method 2
        $data_2 = array("first", "second");
        array_push($data_2, "giorgo", 45, 56, "hana");
        print_r($data_2);
    ?>
</body>
</html>