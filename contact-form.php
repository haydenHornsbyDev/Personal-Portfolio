<?php

if (isset($_POST['email'])&&isset($_POST['subject'])&&isset($_POST['message'])) {
    $emailFrom = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $mailTo = "dev@haydenhornsby.xyz";
    $txt = "You have received an email from ".$emailFrom.".\n\n".$message;

    mail($mailTo, $subject, $txt);
}

?>
<html>

<head>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link href="./stylesheet.css" rel="stylesheet">
    <title>Sent!|haydenhornsby.xyz</title>
</head>

<body>
    <div class="o-wrapper o-wrapper--light">
        <div class="o-container">
            <div class="c-form-submission">
                <div class="c-form-submission__card">
                    <h4 class="c-form-submission__header u-text--white">Message Sent!</h4>
                    <a class="c-form-submission__link" href="/index.html">Return to page</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>