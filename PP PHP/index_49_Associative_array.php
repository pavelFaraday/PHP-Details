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
        "Name"=>"Daniel", 
        "Surname"=>"Nielsen", 
        "age"=>25
    );

    echo $data['Name'];
    print_r($data);



    // Associative Arrays, method 2:
    $data_2["Name"] = "Giorgo";
    $data_2["Surname"] = "armany";
    $data_2["age"] = "45";

    echo "<br>".$data_2['Name'];
    print_r($data_2);





    
    
    
    ?>
</body>
</html>