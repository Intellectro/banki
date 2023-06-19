<?php
if (isset($_SESSION['ALERT'])) {
  $alert = json_decode($_SESSION['ALERT'], true);
  extract($alert);
  echo "<script>swal(`$msg`, ``, `$type`)</script>";

  unset($_SESSION['ALERT']);
}
