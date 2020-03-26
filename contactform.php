<?php

if (isset($_POST['submit'])) {
  $mail = $_POST['email'];
  $text = $_POST['text'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];

  $mailTo = "samuel.rapp@ulricianum-aurich.de";
  $headers = "From: ".$mail;
  $txt = "You have received an e-mail from ".$mail.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location: contact.php?mailsend");
}
