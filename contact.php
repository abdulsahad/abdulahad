<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "ch.abdulsahad@gmail.com";
    $subject = "Message from Website Contact Form";
    $body = "Full Name: $fullname\nEmail: $email\n\nMessage:\n$message";
    if (mail($to, $subject, $body)) {
        echo '<script>alert("Message sent successfully.");</script>';
    } else {
        echo '<script>alert("Failed to send message. Please try again later.");</script>';
    }
}
?>
