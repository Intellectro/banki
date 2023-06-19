<?php

session_start();

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DBNAME", "banki");

function sanitize($input)
{
  return htmlentities(htmlspecialchars(strip_tags(trim($input))));
}


$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

if (isset($_POST['update'])) {

  $fullname = sanitize($_POST['fullname']);
  $email = sanitize($_POST['email']);
  $username = sanitize($_POST['username']);
  $phone = sanitize($_POST['phone']);
  $address = sanitize($_POST['address']);
  $dob = sanitize($_POST['dob']);
  $ssn = sanitize($_POST['ssn']);
  $security_question = sanitize($_POST['security_question']);
  $security_answer = sanitize($_POST['security_answer']);
  $user_id = $_SESSION['user'];

  $result = mysqli_query($link, "UPDATE users SET fullname = '$fullname', ssn = '$ssn', email = '$email', username = '$username', phone = '$phone', address = '$address', dob = '$dob', security_question = '$security_question', security_answer = '$security_answer' WHERE id = '$user_id'");

  if ($result) {
    $_SESSION['ALERT'] = json_encode(["msg" => "Profile Updated", "type" => "success"]);
    header("Location: ../settings.php");
    // exit();
  } else {
    $_SESSION['ALERT'] = json_encode(["msg" => "Failed to update profile", "type" => "error"]);
    header("Location: ../settings.php");
  }
}
