<?php
    if(isset($_POST['send'])){
        $name=htmlspecialchars($_POST['Name']);
        $phone=htmlspecialchars($_POST['PhoneNumber']);
        $email=filter_var($_POST['Email'],FILTER_VALIDATE_EMAIL);
        $type=htmlspecialchars($_POST['type']);

        $to="info@nextgenpro.in";
        $headers="from:$email\r\n";
        $headers="reply-to:text/plain;charset=UTF-8\r\n";
        $emailbody="You Have Recieved A Mail From $name";
        $subject=$type;
        if(mail($to, $subject, $emailbody, $headers)){
            echo"message sent";
            header('location:contact.php');
        }
        else{
            echo"error sending message";
        }


        // $to = "stevesibyweb@gmail.com";
        // $subject = "My subject";
        // $txt = "Hello world!";
        // $headers = "From: $email" . "\r\n";

        // mail($to,$subject,$txt,$headers);
    }
?>