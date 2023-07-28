<?php
if (isset($_POST['email']) && !empty($_POST['email'])) {
  $subject = "Bevan Health request for information: $_POST['name'] from $_POST['organisation]";
  $message = $_POST['body'];
  $headers = 'From: info@website.com' . "\r\n" .
             'Reply-To: ' . $_POST['email']. "\r\n" .
             'X-Mailer: PHP/' . phpversion();

  mail('rasheed@bevanhealth.com', $subject, $message, $headers);

  die('Thank you for your email');
}