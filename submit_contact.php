<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you can add code to save this data to a database or send an email
    // For now, we'll just echo the data

    echo "Thank you, $name. We have received your message.";
}
?>
