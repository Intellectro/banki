<?php
@session_start();
require_once("../inc/functions/helpers.php");
require_once("../inc/functions/user_func.php");
require_once("../inc/functions/db.php");


if (isset($_POST['upload'])) {
  // Get users transaction history
  $id = $_POST['id'];
  $account = $_POST['account'];

  $file = $_FILES['file'];
  $data = file_get_contents($file['tmp_name']);

  $rows = str_getcsv($data, "\n");

  $isDone = [];
  // Loop to the end
  foreach ($rows as $row) {
    $row = str_getcsv($row, ",");
    
    // Check type
    $sender = $row[0];
    $type = $row[1];
    $amount = $row[2];
    $kind = $row[3];
    $to_user = $row[4];
    $beneficiary = $row[5];
    $bank_name = $row[6];
    $swift_code = $row[7];
    $routing_number = $row[8];
    $account_type = $row[9];
    $description = $row[10];
    $status = $row[11];
    $is_pdf = $row[12];
    $created_at = $row[13];
    $is_credit = $row[14];


    // Update Balance
    $accountDetails = executeQuery("SELECT * FROM accounts WHERE acc_number = '$account' AND user_id = '$id'");
    $balance = floatval($accountDetails['acc_balance']);

    if ($type == 1) {
      $balance = $balance - floatval($amount);
    } else {
      $balance = $balance + floatval($amount);
    }

    // Update balance
    returnQuery("UPDATE accounts SET acc_balance = $balance WHERE acc_number = '$account' AND user_id = '$id'");
    $query = returnQuery("INSERT INTO `transactions`(`user_id`, `sender`, `type`, `amount`, `account_num`, `kind`, `to_user`, `beneficiary`, `bank_name`, `swift_code`, `routing_number`, `account_type`, `description`, `status`, `is_pdf`, `created_at`, `is_credit`) VALUES ('$id', '$sender', '$type', $amount, '$account', '$kind', '$to_user', '$beneficiary', '$bank_name', '$swift_code', '$routing_number', '$account_type', '$description', '$status', '$is_pdf', '$created_at', '$is_credit')");
    array_push($isDone, $query);
  }

  if(!array_filter($isDone,  function($bool) { return $bool === false; })) {
    $_SESSION['A_ALERT'] = json_encode(['type' => "success", 'message' => "Transaction uploaded successfully"]);
    header("Location:" . $_SERVER["HTTP_REFERER"]);
  }
  else {
    $_SESSION['A_ALERT'] = json_encode(['type' => "error", 'message' => "Failed to upload transaction"]);
    header("Location:" . $_SERVER["HTTP_REFERER"]);
  } 
}
