<?php
@session_start();
require_once '../admin/inc/functions/config.php';
$title = "transfer";
require_once 'inc/header.php';

$IS_ALLOWED = false;
$IS_ALLOWED_2 = false;



if (isset($_POST["submit"])) {

  $id = $_SESSION['user'];
  $account = $_POST['account'];
  $amount = $_POST['amount'];
  $userAccount = $_POST['sender_account'];
  $routing_number = $_POST['routing_number'];

  $sql = "SELECT * FROM `allowed` WHERE `user_id` = '$id' AND `account` = '$account'";
  $res = executeQuery($sql);

  print($res);
  die();

  if ($num < 1) {
    $IS_ALLOWED = true;
  } else {
    $IS_ALLOWED = false;
    // Check balance
    $accountDetails = executeQuery("SELECT * FROM accounts WHERE user_id = '$id' AND acc_number = '$userAccount'");
    $balance = floatval($accountDetails['acc_balance']);

    if ($balance < floatval($amount)) {
      echo "<script>swal(`Insuffient fund`, ``, `error`)</script>";
    } else {
      try {
        $response = returnQuery("INSERT INTO `transactions` (`user_id`, `type`, `account_num`, `amount`, `to_user`, `swift_code`, `kind`) VALUES ('$id', 1, '$userAccount', $amount, '$account', '$routing_number', 'direct deposit')");
        if ($response) {
          $IS_ALLOWED_2 = true;
        }
        else echo "<script>swal(`Transaction failed`, ``, `error`)</script>";
      } catch (Exception $err) {
        echo "<script>swal(`$err`, ``, `error`)</script>";
      }
    }
  }
  unset($_POST['submit']);
}



?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

  <!-- Page Content -->
  <div class="content">
    <!-- Quick Overview -->
    <h2 class="content-heading">
      <i class="fa fa-angle-right text-muted mr-1"></i> Direct Deposit
    </h2>

    <div class="row">

      <div class="col-lg-12 col-xl-12">
        <form action="" method="post" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">

          <div class="form-group">
            <label for="sender" class="form-input-label">Sender's Account</label>
            <select required name="sender_account" id="sender" class="form-control form-input-field">
              <?php foreach ($userAccounts as $account) : ?>
                <option value="<?= $account['acc_number'] ?>">
                  <?= $account['acc_number'] . " - " . $account['acc_type'] ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="" class="form-input-label">Account Number</label>
            <input required type="text" maxLength="9" name="account" class="form-control form-input-field">
          </div>

          <div class="form-group">
            <label for="" class="form-input-label">Routing / ABA</label>
            <input required type="text" maxLength="9" name="routing_number" class="form-control form-input-field">
          </div>

          <div class="form-group">
            <label for="" class="form-input-label">Amount</label>
            <input required type="text" class="form-control form-input-field" name="amount" />
          </div>

          <hr>
          <div class="form-group" id="make_transfer">
            <div class="input-group">
              <div class="input-group-append">
                <button type="submit" id="tbtn" name="submit" class="btn btn-alt-success">Proceed</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<?php if ($IS_ALLOWED_2) : ?>
  <?php require_once 'inc/loader2.php'; ?>
<?php endif; ?>

<!-- Footer -->
<?php if ($IS_ALLOWED) : ?>
  <?php require_once 'inc/loader.php'; ?>
<?php endif; ?>


<?php require_once 'inc/footer.php';     ?>
<script src="js/get_recipent.js"></script>