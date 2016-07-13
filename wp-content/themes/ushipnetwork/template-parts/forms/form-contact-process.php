<?php

    $to = "rmikeska@uship.com";
    $from = $_REQUEST['email'];
    $headers = "From: $from";
    $subject = $_REQUEST['subject'];

    $fields = array();
    $fields{"subject"} = "subject";
    $fields{"email"} = "email";
    $fields{"question"} = "question";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>