<?php
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {

    $name = $_POST['naam'];
    $visitor_email = $_POST['email'];
    $message = $_POST['bericht'];
    $subject = 'Bericht van de website';

    $email_body = "User Name: $name\n" .
        "Gebruiker's Email: $visitor_email\n" .
        "Bericht: $message.\n";


    $to = "25848@ma-web.nl";

    $headers = "From: $visitor_email \r\n";

    $headers .= "Reply-To: $visitor_email \r\n";

    $result = mail($to, $subject, $email_body, $headers);

    if ($result === false) {
        echo 'Mail niet verstuurd';
        exit;
    }

    header("Location: index.php#Aanmelden");
    $message = "De mail is verstuurd!";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
