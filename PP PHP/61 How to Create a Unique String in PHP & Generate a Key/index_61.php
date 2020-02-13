<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

/* 
1) Create random string of characters... 
Usage: Sending temporary key by mail to ally a user to reset their password, etc...

2) Create a unique string based on microtime...
Usage: Create a unique name for uploaded files or user data in a DB. This is a quick solution.

3) Create a unique key that doesn't exist in a DB Table...
Usage: Create a unique name for uploaded files or user data in DB
*/

// -------------------------------------------------------------------------------------------------------------

// 1) Create random string of characters... 
// Usage: Sending temporary key by mail to ally a user to reset their password, etc...

echo "1) Create random string of characters:";

    function generateKey () {
        $keyLength = 8;
        $str = "1234567890abcdefghijklmnopqrstuvwxyz&%/$";
        $randStr = substr(str_shuffle($str), 0, $keyLength);
        return $randStr;
    }

    echo '<b>'.generateKey().'</b>';

// -------------------------------------------------------------------------------------------------------------
    echo "<br><br>";
    echo "2 Option 1) Create a unique string based on microtime:";

    //  2) Create a unique string based on microtime...
    //  Usage: Create a unique name for uploaded files or user data in a DB. This is a quick solution.

    function generateKeyMicrotime () {
        $randStr = uniqid('GIORGI-');
        return $randStr;
    }

    echo '<b>'.generateKeyMicrotime().'</b>';

// ----------------------------------------------------------------

    // Don't use this option FOR SECURITY DATA, like PASSWORDS !!!

    echo "<br>";
    echo "2 Option 2) Create a unique string based on microtime:";

    function generateKeyMicrotime2 () {
        $randStr = uniqid('GIORGI-', true);
        return $randStr;
    }

    echo '<b>'.generateKeyMicrotime2().'</b>';

// ----------------------------------------------------------------

// USE this option FOR SECURITY DATA, like PASSWORDS !!!

$conn = mysqli_connect("localhost", "root", "", "imgupload");

function checkKeys($conn, $randStr) {
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['password'] == $randStr) {
           $keyExists = true;
           exit();
        } else {
            $keyExists = false;
        }
    }

    return $keyExists;
}


function generateKey3($conn) {
    $keyLength = 8;
    $str = "1234567890abcdefghijklmnopqrstuvwxyz&%/$";
    $randStr = substr(str_shuffle($str), 0, $keyLength);

    $checkKey = checkKeys($conn, $randStr);

    while ($checkKey == true) {
        $randStr = substr(str_shuffle($str), 0, $keyLength);
        $checkKey = checkKeys($conn, $randStr);
    }
    
    return $randStr;
}

echo generateKey3();












?>
</body>
</html>


