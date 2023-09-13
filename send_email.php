<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phoneNumber = $_POST["phone-number"];
    $message = $_POST["message"];

    $to = "arfstentransportllc@gmail.com";
    $subject = "Contact Form Submission from Arfsten Transport Website";
    $headers = "From: $email";
    $mailBody = "Name: $name\nEmail: $email\nPhone Number: $phoneNumber\n\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message! We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>
