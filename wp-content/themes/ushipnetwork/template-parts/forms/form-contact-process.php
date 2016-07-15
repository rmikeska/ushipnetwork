<?php

    if ($_REQUEST['inquiry-type'] == "pets") {
        $inquiry = "Pets Inquiry: ";
    } elseif ($_REQUEST['inquiry-type'] == "freight") {
        $inquiry = "Freight Inquiry: ";
    } else {
        $inquiry = "General Inquiry: ";
    }

    $to = "rmikeska@uship.com";
    $from = $_REQUEST['email'];
    $headers = "From: $from";
    $subject = $inquiry . $_REQUEST['subject'];
    $question = $_REQUEST['question'];

    $body = "Sent via the contact form on https://learn.uship.com/contact/\n\n" . $question;

    $send = mail($to, $subject, $body, $headers);

?>