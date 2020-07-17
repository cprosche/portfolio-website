<?php

/*
Uses name attribute to send email on submit action and adds message to URL
AKA <input name="name" />

*/

if (isset($_POST['submit'])) {
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "bigbear@mammothultralight.com";
    $headers = "From: " . $mailFrom;
    $txt = "You have recieved an email from " . $firstName . " " . $lastName . "\n\n" . $message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: caderosche.com/?mailsend");
};
