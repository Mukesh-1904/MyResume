<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "mukeshnatarajan19@gmail.com";  // Your email
    $subject = htmlspecialchars($_POST['subject']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $headers = "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "You have received a new message from your portfolio website:\n\n";
    $fullMessage .= "Name: " . $name . "\n";
    $fullMessage .= "Email: " . $email . "\n";
    $fullMessage .= "Subject: " . $subject . "\n\n";
    $fullMessage .= "Message:\n" . $message . "\n";

    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
