<?php

if (isset($_POST['submit'])) {
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "dev@haydenhornsby.xyz";
    $txt = "You have received an email from ".$emailFrom.".\n\n".$message;

    mail($mailTo, $subject, $txt);
}