<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

require_once '../inc/functions/config.php';


error_reporting(0);


if(isset($_GET['accounts'])) {
  $user = $_GET['accounts'];

  $accounts = getUsersAccountsDetails($user);
  echo json_encode($accounts);
  exit;
}






