<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "krishnapatil6446@gmail.com";
  $subject = "New form submission from your website";
  $headers = "From: $email";
  
  mail($to, $subject, $message, $headers);
  echo "OK";
} else {
  echo "Form submission failed.";
}
?>