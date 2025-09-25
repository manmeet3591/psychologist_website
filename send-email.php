<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name']; // Get the name field
    $email = $_POST['email']; // Get the email field
    $message = $_POST['message']; // Get the message field

    // Define the email recipient (replace with your actual email)
    $to = "your-email@example.com";  // Change this to your email address

    // Set the email subject
    $subject = "New Message from Dr. Sifat's Therapy Website";

    // Build the email content
    $body = "You have received a new message from the contact form.\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message:\n$message";

    // Set the email headers
    $headers = "From: $email"; // Send the email from the user's email

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message failed to send.";
    }
}
?>
