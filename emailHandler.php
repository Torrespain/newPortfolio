<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    $mailTo = "javier.latorreiba@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an E-mail from ".$name."\nLocation: ".$location." \nPhone: ".$phone." \n\n".$message;

    mail($mailTo, $headers, $txt);
    header("Location: index.html?mailsent");
}
    
?> 