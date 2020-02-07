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

        // 1) While Loop

        $x = 1; // ჩამკეტი დატრიალებისას
        while ($x < 5) {
            echo "Hi, there.. While Loop<br>";
            $x++;  // ჩამკეტი დატრიალებისას
        }

        echo "<br>"; 
        
        //--------------------------------------------------------------------------------------------------

        // 2) Do While Loop - იგივეა, რაც while loop, სინტაქსშია განსხვავება და მნიშვნელოვანი განსხვავება: ჯერ აუცილებლად ასრულებს/არენდერებს ბრძანებას /echo "Hi, there.. do/while Loop<br>";/ (რადგანაც ბრაუზერის კოდის მკითხველი მოყვება ზემოდან ქვემოთ) და შემდეგ ამოწმებს პირობას /while ($x < 5)/ ........... while loop ჯერ ამოწმებს თუ არის true და შემდეგ ასრულებს ბრძანებას და თუ შემოწმების შედეგი false-ია საერთოდ არ გამოაქვს ბრძანება, როცა do/while loop-ს ყველა შემთხვევაში გამოაქვს ბრძანება მხოლოდ ერთხელ.

        $x = 10;  // ამ შემთხვევაში false-ია...
        do {
            echo "Hi, there.. do/while Loop<br>";
            $x++;  
        }
        while ($x < 5);

        echo "<br>";

        //--------------------------------------------------------------------------------------------------

        // 3) For Loop: /for($x = 0; $x < 7; $x++)/ - დასაწყისი, დასასრული და ჩამკეტი

        for ($x = 0; $x < 7; $x++) { 
           echo "Hi, there.. for Loop<br>";
        }

        echo "<br>";

        //--------------------------------------------------------------------------------------------------

        
        // Foreach Loop
        $x = array("Jon", "Linda", "Michel");

        foreach ($x as $person) {
            echo "Each Persons Name is ".$person."<br>";
        }

    ?>

</body>
</html>