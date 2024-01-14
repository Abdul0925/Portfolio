<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email configuration
    $to = "abdulrahim74264@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $email\r\n";

    // Send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect back to the thank you page or wherever you want after submission
    header("Location: ../index.html");
    exit();
}

?>
