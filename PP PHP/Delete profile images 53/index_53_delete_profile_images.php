<?php 
    session_start();
    include_once 'dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $sqlIMG = "SELECT * FROM profileimg WHERE userid='$id'";
                $resultIMG = mysqli_query($conn, $sqlIMG);
                while ($rowIMG = mysqli_fetch_assoc($resultIMG)) {
                    echo "<div>";
                        if ($rowIMG['status'] == 0) {
                            $filename = "uploads/profile".$id."*";
                            $fileinfo = glob($filename);
                            $fileext = explode(".", $filename[0]);
                            $fileactualext = $fileext[1];

                            echo "<img src='uploads/profile".$id.".".$fileactualext."?".mt_rand()."'>";
                        } else {
                            echo "<img src='uploads/profile.jpg'>";
                        }
                    echo "<p><b>".$row['username']."</b></p>";
                    echo "</div>";
                }
            }
        } else {
            echo "There are no users yet!";
        }

        // if We are loged in, Please show me these messages
        if (isset($_SESSION['id'])) {
            if ($_SESSION['id'] == 1) {
                echo "You are loged in as USER #1";
            }
            echo 
            "<form action='upload.php' method='POST' enctype='multipart/form-data'>
                <input type='file' name='file'>
                <button type='submit' name='submit'>UPLOAD</button>
            </form>";

            echo 
            "<form action='deleteprofile.php' method='POST'>
                <button type='submit' name='submit'>Delete profile IMG</button>
            </form>";
        } else {
            echo "You are not logged in!";
            echo 
            "<form action='signup.php' method='POST'>
                <input type='text' name='first' placeholder='First Name'>
                <input type='text' name='last' placeholder='Last Name'>
                <input type='text' name='uid' placeholder='User Name'>
                <input type='password' name='pwd' placeholder='Password'>
                <button type='submit' name='submitSignup'>SignUp</button>
            </form>";
        }
    
    ?>


    <p>Login as User!</p>
    <form action="login.php" method="POST">
        <button type="submit" name="submitLogin">Login</button>
    </form>

    <p>Logout as User!</p>
    <form action="logout.php" method="POST">
        <button type="submit" name="submitLogout">Logout</button>
    </form>

    
<!-- 43:00 -->
    
</body>
</html>