<?php 
    session_start();
    session_unset();
    session_destroy();

    header("Location: index_52_Upload_Files_and_Images_to_Website.php");
?>