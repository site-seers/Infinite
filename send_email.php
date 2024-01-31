<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Get form data
    $name = $_GET['name'];
    $email = $_GET['email'];
    $message = $_GET['message'];

    // Set recipient email address
    $to = 'slenon@proton.me';

    // Set email subject
    $subject = 'New Contact Form Submission';

    // Compose email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Attempt to send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error sending email.';
    }
}
?>
