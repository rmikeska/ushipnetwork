<?php


    if($_GET['c'] === 'pets') {
        $inquiry = "Pets Inquiry: ";
    } elseif($_GET['c'] === 'freight') {
        $inquiry = "Freight Inquiry: ";
    } else {
        $inquiry = "General Inquiry: ";
    }

    // if (isset($_GET['c'])) {
    //     echo $_GET['link'];
    // } else {

    // }

    // if(isset($_GET["c"]) && trim($_GET["c"]) == 'pets') {
    //    $inquiry = "Pets Inquiry: ";
    // } elseif(isset($_GET["c"]) && trim($_GET["c"]) == 'freight') {
    //     $inquiry = "Freight Inquiry: ";
    // } else {
    //    $inquiry = "General Inquiry: ";
    // }

    $to = "rmikeska@uship.com";
    $from = $_REQUEST['email'];
    $headers = "From: $from";
    $subject = $inquiry . $_REQUEST['subject'];

    $fields = array();
    $fields{"subject"} = "Subject";
    $fields{"email"} = "Email";
    $fields{"question"} = "Question/Problem/Concern";

    $body = "Sent via the contact form on https://learn.uship.com/contact/:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>