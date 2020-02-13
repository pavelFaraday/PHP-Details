<?php 
    session_start();

    if (isset($_POST['submitLogin'])) {
        $_SESSION['id'] = 1;
        header("Location: index_52_Upload_Files_and_Images_to_Website.php");
    }

?>