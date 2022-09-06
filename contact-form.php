<!-- <?php

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

?> -->
<html>

<head>
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <link href="./stylesheet.css" rel="stylesheet">
    <title>Sent!|haydenhornsby.xyz</title>
</head>

<body>
    <div class="c-form-submission">
        <div class="o-wrapper o-wrapper--light">
            <div class="o-container">
                <div class="c-form-submission__card">
                    <h5 class="c-form-submission__header">Message Sent!</h5>
                    <a class="c-form-submission__link" href="/index.html">Return to page</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>