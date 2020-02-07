<?php 
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];
        // print_r($file);
        $fileName = $_FILES['file']['name'];
        $fileTMPName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file( $fileTMPName,  $fileDestination);

                    header('Location: index_51_Upload_Files_and_Images_to_Website.php?uploadSuccess');
                } else {
                    echo "Your file is too big!";
                }
            } else {
                echo "There was an Error!";
            }
        } else {
            echo "You cann't upload files of this type!";
        }

    }

?>