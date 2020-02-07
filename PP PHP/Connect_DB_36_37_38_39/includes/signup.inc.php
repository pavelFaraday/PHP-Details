<?php
    // insert data into a DB from a Website 

    include_once 'dbh.inc.php';

    /* mysqli_real_escape_string() function escapes special characters in a string for use in an SQL query, taking into account the current character set of the connection.
    This function is used to create a legal SQL string that can be used in an SQL statement. */

    $First_name = mysqli_real_escape_string($conn, $_POST['First_name']) ;
    $Last_name = mysqli_real_escape_string($conn, $_POST['Last_name']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $User_uid = mysqli_real_escape_string($conn, $_POST['User_uid']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);
    
    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$First_name', '$Last_name', '$Email', '$User_uid', '$Password');";

    mysqli_query($conn, $sql);

    header("Location: ../index_38_insert_into_DB.php?signup=success")

    /*header("Location: ../index_38_insert_into_DB.php?signup=success") ნიშნავს: სკრიპტის დასრულების შემდეგ ისევ გადადი index_38_insert_into_DB ფაილში და URL-ში დაწერე ?signup=success */ 
?>