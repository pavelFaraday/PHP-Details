<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form>
        <input type="text" name="num1" placeholder="number 1">
        <select name="operator">
            <option> None </option>
            <option> + </option>
            <option> - </option>
            <option> * </option>
            <option> / </option>
        </select>
        <input type="text" name="num2" placeholder="number 2">
        
        <button type="submit" name="submit" value="submit">Calculate</button>
        <p>Answer:</p>
    </form>

    <?php 

        // 1) თუ დავაჭერთ ღილაკს "submit"... ($_GET['submit'])-ანუ დაჭერის ინფორმაციას იღებს URL-დან, როდესაც ვაჭერთ submit ღილაკს URL-შიც იწერება submit. 
        // 2) form-ში რაც name-ბი გვიწერია ამათზე უნდა ვიმოქმედოთ, შესაბამისად php კოდში უნდა განვსაზღვროთ ცვლადებათ..
        // 3) $_GET['num1'] - ანუ რასაც input-ებში შევიყვანთ დაიწერება URL-ებში. როდესაც ცვლადში ვსაზღვრავთ $_GET მეთოდს ცვლადი მნიშვნელობად იღებს input-ში შეყვანილ ინფოს, რომელიც ფიქსირდება URL-ში...

        if (isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case 'None':
                        echo "ERROR";
                break;
                case '+':
                    echo  $result1 + $result2;
                break;
                case '-':
                    echo $result1 - $result2;
                break;
                case '*':
                    echo $result1 * $result2;
                break;
                case '/':
                    echo $result1 / $result2;
                break;
            }
        }
    ?>


</body>
</html>