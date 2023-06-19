<?php require("./SET_UP.php") ?>
<?php
$errors = [];
require_once './admin/inc/functions/config.php';
// echo generateNumber(2);

if (isset($_POST['submit'])) {
  $response = user_login($_POST);

  if ($response === true) {
    redirect_to("/user/validate-login.php");
  } else {
    $errors = $response;
    if (is_array($errors)) {
      foreach ($errors as $err) {
        echo "<script>alert('$err')</script>";
      }
    } else {
      echo "<script>alert('$errors')</script>";
    }
  }
}
?>