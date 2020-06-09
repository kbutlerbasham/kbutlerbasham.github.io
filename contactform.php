<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailto = "kaitlin.butlerbasham@yahoo.com";
    $headers = "From: ".$email;
    $txt = "You have received a request from ".$name.".\n\n".$message;

    mail($mailto, $subject, $txt, $headers);
    header("Location: index.html?emailsent");
}