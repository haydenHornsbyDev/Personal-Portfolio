<?php

if (isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['message'])) {
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "dev@haydenhornsby.xyz";
    $txt = "You have received an email from ".$emailFrom.".\n\n".$message;

    // mail($mailTo, $subject, $txt);
    
    $message_sent = mail($mailTo, $subject, $txt);
    var_dump($message_sent);
}

?>