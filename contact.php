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
<form method="post" action="sendemail.php">
  <div class="fields">
    <div class="field">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" />
    </div>
    <div class="field">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" />
    </div>
    <div class="field">
      <label for="message">Message</label>
      <textarea name="message" id="message" rows="3"></textarea>
    </div>
  </div>
  <ul class="actions">
    <li><input type="submit" value="Send Message" /></li>
  </ul>
</form>

