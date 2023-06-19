<?php

require_once '../inc/functions/config.php';

if (isset($_GET['tid']) && isset($_GET['userid']) && isset($_GET['amount']) && isset($_GET['to'])) {
    $t_id = $_GET['tid'];

    // TODO: FIX THE USERS / ACCOUNTS SLASH

    // get the account
    $trx = executeQuery("SELECT * FROM transactions WHERE id = '$t_id'");
    $account = $trx['account_num'];

    $sql = "UPDATE transactions SET status = 'approved' WHERE id = '$t_id'";
    $query = validateQuery($sql);

    if ($query === true) {

        $id = $_GET['userid'];
        $amount = $_GET['amount'];

        $sql2 = "SELECT * FROM accounts WHERE user_id = '$id' AND acc_number = '$account'";
        $query2 = executeQuery($sql2);

        if ($query2) {
            $details = $query2;

            $current_bal = $details['acc_balance'];

            $updated_bal = $current_bal - $amount;

            $sql3 = "UPDATE accounts SET acc_balance = '$updated_bal' WHERE user_id = '$id' AND acc_number = '$account'";
            $query3 = validateQuery($sql3);

            if ($query3 === true) {
                echo "true";
            } else {
                echo "false";
            }
        }
        
    }
}
