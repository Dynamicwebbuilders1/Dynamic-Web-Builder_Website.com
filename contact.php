<?php
$name = $POST['name'];
$visitor_email = $POST['email']
$message = $POST['message']


$email_from = 'praysnl1234xs@gmailc.com';

$email_subject = "New Suspected Clients";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                   "User Message: $message.\n;"

        $to = "dynamicwebbuilders403@gmail.com";

        $headers = "From: $email_from /r/n";
        $headers .= "Reply-To: $visitor_email \r\n";

        mail($to,$email_subject,$email_body,$headers);

        header("Location: index.html");

?>