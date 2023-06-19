<?php
@session_start();
require_once("../inc/functions/helpers.php");
require_once("../inc/functions/user_func.php");
require_once("../inc/functions/db.php");


if (isset($_POST['download'])) {
  // Get users transaction history
  $id = $_POST['id'];
  $account = $_POST['account'];

  $TRANSACTIONS = mysqli_fetch_all(returnQuery("SELECT * FROM transactions WHERE user_id = '$id' AND account_num = '$account' AND is_credit = 0 ORDER BY created_at DESC"), MYSQLI_ASSOC);

  // Remove the user_id AND account 
  $arr = array_map(function ($item) {
    unset($item['id']);
    unset($item['user_id']);
    unset($item['account_num']);
    return $item;
  }, $TRANSACTIONS);

  // Convert to CSV
  $filename = generate_file_name();
  create_csv($filename, $arr);

  $_SESSION['A_ALERT'] = json_encode(['type' => "success", 'message' => "Transaction uploaded successfully"]);
  // Download
  header('Content-Type: application/octet-stream');
  header("Content-Transfer-Encoding: utf-8");
  header("Content-disposition: attachment; filename=\"" . basename($filename) . "\"");

  readfile($filename);


  // Delete
  unlink($filename);
}
