<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    $recipient = "joelenehales@bell.net";

    $headers = "From: ".$email;
    $txt = "You have recieved an email from ".$name." via website form.\n\n".$message;
    
    mail($recipient, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}


?>
