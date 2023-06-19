<?php 
require_once '../../admin/inc/functions/config.php';


if(isset($_POST["send"])) {
  $email = sanitize($_POST["email"]);
  $fullname = sanitize($_POST["fullname"]);
  $message = sanitize($_POST["message"]);

  $html = "<html>
    <body>
      <p>Name: $fullname</p>
      <p>Email: $fullname</p>
      <p>Message:</p>
      <p>$message</p>
    </body>
  </html>";

  sendEmail("customercare@bekofcu.com", "Contact Message", $html);
  $_SESSION['ALERT'] = json_encode(["msg" => "Message Sent", "type" => "success"]);
  header("Location: ../help-center");
}