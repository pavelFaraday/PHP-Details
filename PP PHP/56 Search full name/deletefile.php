<?php 
    $path = "uploads/cat*";
    $fileinfo = glob($path);
    $fileactualname = $fileinfo[0];

    if (!unlink($fileactualname)) {
        echo "You have an error!";
    } else {
        header("Location: index_56_Search_full_name?deleteSuccess");
    }


?>