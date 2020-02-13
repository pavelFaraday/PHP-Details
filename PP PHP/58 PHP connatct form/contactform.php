<?php 
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailfrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "epita123@gmail.com";
        $headers = "From: ".$mailfrom;
        $txt = "You have received e-mail from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index_58_php_contact_form.php?mailsend");

    }
?>