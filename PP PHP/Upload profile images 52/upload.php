<?php 
    session_start();
    include_once "dbh.inc.php";
    $id = $_SESSION['id'];

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
                    $fileNameNew = "profile".$id.".".$fileActualExt;
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file( $fileTMPName,  $fileDestination);
                    $sql = "UPDATE profileimg SET status=0 WHERE userid='$id';";
                    $result = mysqli_query($conn, $sql);

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