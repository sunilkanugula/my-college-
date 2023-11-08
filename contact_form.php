<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mobile_number = $_POST["mobile_number"];
  $message = $_POST["message"];

  $to = "kanugulasunilkumar0511@gmail.com"; // Your recipient email address
  $subject = "New Form Submission";

  $messageBody = "Name: $name\n";
  $messageBody .= "Email: $email\n";
  $messageBody .= "Mobile Number: $mobile_number\n";
  $messageBody .= "Message:\n$message";

  $headers = "From: $email";

  // Send email
  mail($to, $subject, $messageBody, $headers);
}
?>
