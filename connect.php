<?php
// Retrieve form data
$name = $_POST['volunteer-name'];
$email = $_POST['volunteer-email'];
$subject = $_POST['volunteer-subject'];
$message = $_POST['volunteer-message'];

// Display submitted data
echo "<h2>Thank you for volunteering!</h2>";
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";
echo "<p>Subject: $subject</p>";
echo "<p>Message: $message</p>";
?>
