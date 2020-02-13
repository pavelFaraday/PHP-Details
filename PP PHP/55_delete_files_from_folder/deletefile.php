<?php 
    $filenames = $_POST['filename'];
    $remove_spaces = str_replace(" ", "", $filenames);
    $allFileNames = explode(",", $remove_spaces);
    $countAllNames = count($allFileNames);

    for ($i=0; $i < $countAllNames; $i++) { 
        if (file_exists("uploads/".$allFileNames[$i]) == false) {
            header("Location: index_55_delete_files_from_folder.php?deleteError");
            exit();
        }
    }

    for ($i=0; $i < $countAllNames; $i++) { 
        $path = "uploads/".$allFileNames[$i];
        if (!unlink($path)) {
            echo "You have an error!";
            exit();
        }
    }

    header("Location: index_55_delete_files_from_folder.php?deleteSuccess");


   


?>