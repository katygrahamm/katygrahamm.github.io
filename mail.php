<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'KatyAndersenPortfolio'; 
    $recipient = "katygrahamandersen@gmail.com";
    $subject = 'Contact Form';	
    $mailheader = "From: $email \r\n";
    $formcontent="From: $name\n E-Mail: $email\n Message:\n $message";
    
    mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
    echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>

