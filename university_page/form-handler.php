<?php

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'info@yourwebsite.com';

    $email_subject = 'New Form Submissioon';

    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "Message: $message.\n";
    
    $to = 'caravig1300@outlook.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);
    header("Location: contact.html")

?>