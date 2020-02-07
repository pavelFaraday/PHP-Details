<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        p {
            text-align: center;
            font-size: 120px;
            font-family: Arial;
            margin-top: 30vh;
            color: green;
        }
    
    </style>
</head>
<body>
<!-- https://www.youtube.com/redirect?event=video_description&v=ZFEAwdxH5xM&redir_token=9Z6-z_jdLCEESXJKdRUei3ltz5x8MTU3ODYzNzgwMEAxNTc4NTUxNDAw&q=http%3A%2F%2Fwww.w3schools.com%2Fphp%2Ffunc_date_date.asp -->
    
    <?php 
        $dayofWeek = date("w"); // w გვიჩვენებს რომელი დღეა კონკრეტულ მომენტში. 
        
        switch ($dayofWeek) {
            case '1':
                echo "<p>დღეს ორშაბათია!</p>";
            break;
            case '2':
                echo "<p>დღეს სამშაბათია!</p>";
            break;
            case '3':
                echo "<p>დღეს ოთხშაბათია!</p>";
            break;
            case '4':
                echo "<p>დღეს ხუთშაბათია!</p>";
            break;
            case '5':
                echo "<p>დღეს პარასკევი!</p>";
            break;
            case '6':
                echo "<p>დღეს შაბათია!</p>";
            break;
            case '0':
                echo "<p>დღეს კვირა!</p>";
            break;

        }
    ?>

</body>
</html>