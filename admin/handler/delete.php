<?php
@session_start();
require_once("../inc/functions/helpers.php");
require_once("../inc/functions/user_func.php");
require_once("../inc/functions/db.php");


if (isset($_GET['delete'])) {
  $del_id = $_GET['delete'];

  $transaction = executeQuery("SELECT * FROM transactions WHERE id = '$del_id'");

  $user_id = $transaction['user_id'];
  $account = $transaction['account_num'];

  $accountDetails = executeQuery("SELECT * FROM accounts WHERE acc_number = '$account' AND user_id = '$user_id'");
  $balance = floatval($accountDetails['acc_balance']);

  if($transaction['type'] == 1) {
    $balance = $balance + floatval($transaction['amount']);
  }
  else {
    $balance = $balance - floatval($transaction['amount']);
  }

  // Update balance
  returnQuery("UPDATE accounts SET acc_balance = $balance WHERE acc_number = '$account' AND user_id = '$user_id'");

  // Delete transaction
  $response = returnQuery("DELETE FROM transactions WHERE id = '$del_id'");
  if ($response) {
    $_SESSION['A_ALERT'] = json_encode(['type' => "success", 'message' => "Transaction deleted successfully"]);
    header("Location:" . $_SERVER["HTTP_REFERER"]);
  } else {
    $_SESSION['A_ALERT'] = json_encode(['type' => "error", 'message' => "Failed to delete transaction"]);
    header("Location:" . $_SERVER["HTTP_REFERER"]);
  }
}