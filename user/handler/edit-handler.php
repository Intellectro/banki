<?php
require_once '../../admin/inc/functions/config.php';

if (isset($_POST['submit'])) {
  if ($_FILES['img']['name']) {
    $profileImage =  time() . $_FILES['img']['name'];
    $profileImageTmp = $_FILES['img']['tmp_name'];

    $user_id = $_SESSION['user'];
    $uploaded = move_uploaded_file($profileImageTmp, "../../media/users/$profileImage");

    if ($uploaded) {
      $sql = "UPDATE users SET profile_pic = '$profileImage' WHERE id = '$user_id'";
      $query = validateQuery($sql);

      if ($query) {
        $_SESSION['ALERT'] = json_encode(["msg" => "Profile Updated", "type" => "success"]);
        header("Location: ../edit-profile.php");
      } else {
        $_SESSION['ALERT'] = json_encode(["msg" => "Failed to update profile", "type" => "error"]);
        header("Location: ../edit-profile.php");
      }
    }
  } else {
    $_SESSION['ALERT'] = json_encode(["msg" => "Failed to update profile", "type" => "error"]);
    header("Location: ../edit-profile.php");
  }
}
