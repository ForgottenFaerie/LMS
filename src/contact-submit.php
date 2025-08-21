<?php
// Sanitize email input
$emailSanitized = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

// Validate $emailSanitized
if (!filter_var($emailSanitized, FILTER_VALIDATE_EMAIL) === false) {
  echo ("$emailSanitized is a valid email address");
  // The submitted email is clean and VALID. 
  // You may integrate anti-spam API and send email.
} else {
  // The submitted email is clean but INVALID.
  // You may ignore the submission.
  echo ("$emailSanitized is not a valid email address");
}
?>
