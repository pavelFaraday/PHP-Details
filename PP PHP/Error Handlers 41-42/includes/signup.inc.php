 <?php
    if (isset($_POST['submit'])) {
        include_once "dbh.inc.php";

        $first = $_POST['First_name'];
        $last = $_POST['Last_name'];
        $email = $_POST['Email'];
        $uid = $_POST['User_uid'];
        $pwd = $_POST['Password'];

        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) ) {
            header("Location: ../index_41_42_Error_hendlers.php?signup=empty");
            exit();
        } else {
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
                header("Location: ../index_41_42_Error_hendlers.php?signup=char");
                exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../index_41_42_Error_hendlers.php?signup=INVALID_EMAIL&first=$first&last=$last&uid=$uid");
                exit();
            }
            else {
                header("Location: ../index_41_42_Error_hendlers.php?signup=success");
                exit();
            }
        }
    }
}   else {
        header("Location: ../index_41_Error_hendlers.php?signup=error");
    }


    // How to create a complete login system in PHP (NEW VIDEO LINKED IN DESC!) | PHP tutorial >>>>
    // https://www.youtube.com/watch?v=LC9GaXkdxF8
    // https://www.youtube.com/watch?v=dR-qi53ZbII
?>