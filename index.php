<?php

// Check if the form has been submitted
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Send an email to the website owner
  mail('your@email.com', 'Contact Form Submission', $message, 'From: ' . $email);

  // Redirect the user to a confirmation page
  header('Location: contact-success.php');

}
