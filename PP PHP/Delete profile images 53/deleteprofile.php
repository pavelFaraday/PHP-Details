<?php 
    session_start();
    include_once "dbh.inc.php";

    $sessionid = $_SESSION['id'];

    $filename = "uploads/profile".$sessionid."*";
    $fileinfo = glob($filename);

    $fileext = explode(".", $filename[0]);
    $fileactualext = $fileext[1];

    $file = "uploads/profile".$sessionid.".".$fileactualext;

    if (!unlink($file)) {
        echo "file was not deleted!"; 
    } else {
        echo "file was deleted!"; 
    }

    $sql = "UPDATE profileimg SET status=1 WHERE userid='$sessionid';";
    mysqli_query($conn, $sql);

    header("Location: index_53_delete_profile_images.php?messageSuccess");


?>