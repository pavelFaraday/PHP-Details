<?php
    // Prepared statements - insert data from Page into DB  >>>>
    // This Functions of Prepared statemnts are only for PP PHP (Not for OOP PHP) !!! 

    include_once 'dbh.inc.php';

    $First_name = mysqli_real_escape_string($conn, $_POST['First_name']) ;
    $Last_name = mysqli_real_escape_string($conn, $_POST['Last_name']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $User_uid = mysqli_real_escape_string($conn, $_POST['User_uid']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);
    
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?);";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL error!";
    } else {
        mysqli_stmt_bind_param($stmt, "sssss", $First_name, $Last_name, $Email, $User_uid, $Password);
        mysqli_stmt_execute($stmt);
    }
    
    header("Location: ../insert_into_DB.php?signup=success")
?>