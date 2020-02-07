<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <!-- insert data into a DB from a Website -->

     <!-- action="includes/signup.inc.php" ნიშნავს: submit-ზე დაჭერისას გადადი includes/signup.inc.php ფაილზე და შეასრულე იქ დაწერილი სკრიპტი.  -->
     
    <form action="includes/signup.inc.php" method="POST"> 
        <input type="text" name="First_name" placeholder="First Name">
        <br>
        <input type="text" name="Last_name" placeholder="Last Name">
        <br>
        <input type="text" name="Email" placeholder="Email">
        <br>
        <input type="text" name="User_uid" placeholder="UserName">
        <br>
        <input type="password" name="Password" placeholder="Password">
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>

    
</body>
</html>