<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Signup</h2>
       
    <form action="includes/signup.inc.php" method="POST"> 
    <?php 
        if (isset($_GET['first'])) {
            $first = $_GET['first'];
            echo '<input type="text" name="First_name" placeholder="First Name" value="'.$first.'">';
        } else {
            echo '<input type="text" name="First_name" placeholder="First Name">';
        }

        if (isset($_GET['last'])) {
            $last = $_GET['last'];
            echo '<input type="text" name="Last_name" placeholder="Last Name" value="'.$last.'">';
        } else {
            echo '<input type="text" name="Last_name" placeholder="Last Name">';
        }
    ?>

        <input type="text" name="Email" placeholder="Email">

        <?php 
            if (isset($_GET['uid'])) {
                $uid = $_GET['uid'];
                echo '<input type="text" name="User_uid" placeholder="UserName" value="'.$uid.'">';
            } else {
                echo '<input type="text" name="User_uid" placeholder="UserName">';
            }
        ?>
        
        <br>
        <input type="password" name="Password" placeholder="Password">
        <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>

    <?php 
        /* 
        $fullURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        if(strpos($fullURL, "signup=empty") == true) {
            echo "<p>You did not fill all fields!</p>";
            exit();
        } elseif (strpos($fullURL, "signup=char") == true) {
            echo "<p>You used invalid characters!</p>";
            exit();
        } elseif (strpos($fullURL, "signup=INVALID_EMAIL") == true) {
            echo "<p>You used invalid Email</p>";
            exit();
        } elseif (strpos($fullURL, "signup=success") == true) {
            echo "<p>You have been signed in</p>";
            exit();
        }
        */

        // These two codes have the same function and purpose

        if (!isset($_GET['signup'])) {
            exit();
        } else {
            $signupCheck = $_GET['signup'];

            if ($signupCheck == "empty") {
                echo "<p>You did not fill all fields!</p>";
                exit();
            } elseif ($signupCheck == "char") {
                echo "<p>You used invalid characters!</p>";
                exit();
            } elseif ($signupCheck == "INVALID_EMAIL") {
                echo "<p>You used invalid Email</p>";
                exit();
            } elseif ($signupCheck == "success") {
                echo "<p>You have been signed in</p>";
                exit();
            }
        }
    
    ?>

</body>
</html>