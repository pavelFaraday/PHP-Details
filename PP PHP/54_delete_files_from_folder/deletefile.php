<?php 
    $path = "uploads/cat.jpg";

    if (!unlink($path)) {
        echo "You have an error!";
    } else {
        header("Location: index_54_delete_files_from_folder.php?deleteSuccess");
    }


?>