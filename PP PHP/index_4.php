<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- https://www.youtube.com/watch?v=CoorcqbkpI0&list=PL0eyrZgxdwhwBToawjm9faF1ixePexft-&index=4 -->
<!-- input-ში ჩაწერილი ინფორმაციის გამოტანა ცვლადის საშუალებით.  -->

    <form method="GET">
        <input type="text" name="person">
        <button>Submit</button>
    </form>

    <?php 
        $name = $_GET['person'];
        echo $name." არის ქართველი.";
    ?>


</body>
</html>