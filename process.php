<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Construct the email
  $to = "your-email@example.com";
  $subject = "New contact form submission";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  // Send the email
  $headers = "From: $email";
  if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully";
  } else {
    echo "There was a problem sending the email";
  }
}
?>