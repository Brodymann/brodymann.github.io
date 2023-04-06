<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Collect form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // Set recipient email address
  $to = "kylebaumann@gmail.com";

  // Set email subject
  $subject = "New message from Github.Brodymann.io";

  // Construct email message
  $body = "Name: $name\nEmail: $email\n\n$message";

  // Set email headers
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Return-Path: $email\r\n";
  $headers .= "X-Mailer: PHP/" . phpversion();

  // Send email
  if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message!";
  } else {
    echo "Sorry, something went wrong. Please try again later.";
  }
}
?>

<!-- HTML form -->
<!-- modify this form HTML and place wherever you want your form -->
<form
  action="https://formspree.io/f/xzbqjnjp"
  method="POST"
>
  <label>
    Your Name:
    <input type="name" name="name">
  </label>
  <label>
    Your email:
    <input type="email" name="_replyto" placeholder="Your email address" required>
  </label>
  <label>
    Your message:
    <textarea name="message"></textarea>
  </label>
  <!-- your other form fields go here -->
  <button type="submit">Send</button>
</form>

