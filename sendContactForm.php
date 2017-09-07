<?php
if(isset($_POST['submit'])){
    $to = "wedadennis@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message = $_POST['message'];
    $subject = "DSIGNS Contactformulier";
    $subject2 = "Uw bericht is verzonden naar WebDevPro";
    $message = $name . " heeft het volgende bericht gestuurd:" . "\n\n" . $message . "\n\n" . "e-mail adres afzender: " . $from;
    $message2 = "Hallo " . $name . "\n\n" . "Kopie van uw verzonden bericht: " . $message . "\n\n" . "Uw e-mail adres: " . $from;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('location: http://localhost:8888/dsigns_website/');

    }
