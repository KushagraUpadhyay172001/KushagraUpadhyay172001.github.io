<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $query = htmlspecialchars($_POST['query']);

    // Email configuration
    $to = '07pbsharma@gmail.com';
    $subject = 'New Query from Contact Form';
    $message = "Name: $name\nEmail: $email\n\nQuery:\n$query";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Your query has been sent successfully!";
    } else {
        echo "There was a problem sending your query. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
