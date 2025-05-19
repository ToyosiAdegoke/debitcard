<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = $_POST['email'];
    $name = $_POST['name'];
    $code = $_POST['code'];

    $subject = "Your $name Gift Card";
    $message = "Thank you for your purchase!\n\nHere is your $name gift card code:\n\n$code";
    $headers = "From: adegoke.adetoyosi@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
}
