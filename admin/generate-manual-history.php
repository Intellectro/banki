<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';
require_once "../user/inc/banks.php";

$USERS = mysqli_fetch_all(returnQuery("SELECT * FROM users"), MYSQLI_ASSOC);
$ACCOUNTS = mysqli_fetch_all(returnQuery("SELECT * FROM accounts"), MYSQLI_ASSOC);

if (isset($_POST['generate'])) {
  $user = $_POST['user'];
  $sender_account = $_POST['user-account'];
  $recipient_name = $_POST['recipient-name'];
  $recipient_account = $_POST['recipient-account'];
  $bank = $_POST['bank'];
  $amount = $_POST['amount'];
  $swift_code = $_POST['swift-code'];
  $kind = $_POST['kind'];
  $type = $_POST['type'];
  $date = $_POST['date'];
  $description = $_POST['description'];

  $userAccount = executeQuery("SELECT * FROM accounts WHERE acc_number = '$sender_account' AND user_id = '$user'");
  $balance = floatval($userAccount['acc_balance']);

  if ($type == '1') {
    if ($balance < floatval($amount)) {
      echo "<script>swal(`Insuffient balance`, ``, `error`)</script>";
    } else {
      $balance = floatval($balance) - floatval($amount);
      $query = returnQuery("UPDATE accounts SET acc_balance = $balance WHERE acc_number = '$sender_account'");
      if ($query) {
        $sql = "INSERT INTO transactions(user_id, type, kind, amount, account_num, to_user, swift_code, bank_name, beneficiary, description, status, created_at) VALUES ('$user', '$type', '$kind', $amount, '$sender_account', '$recipient_account', '$swift_code', '$bank', '$recipient_name' , '$description', 'approved', '$date')";
        $res = returnQuery($sql);
        if (!$res) {
          echo "<script>swal(`Error generating history`, ``, `error`)</script>";
        } else {
          echo "<script>swal(`History generated!`, '', 'success')</script>";
        }
      } else {
        echo "<script>swal(`Error generating history`, ``, `error`)</script>";
      }
    }
  } else {
     $balance = floatval($balance) + floatval($amount);
    $query = returnQuery("UPDATE accounts SET acc_balance = $balance WHERE acc_number = '$sender_account'");
    if ($query) {
      $sql = "INSERT INTO transactions(user_id, type, kind, amount, account_num, to_user, swift_code, bank_name, beneficiary, description, status, created_at) VALUES ('$user', '$type', '$kind', $amount, '$sender_account', '$recipient_account', '$swift_code', '$bank', '$recipient_name' , '$description', 'approved', '$date')";
      $res = returnQuery($sql);
      if (!$res) {
        echo "<script>swal(`Error generating history`, ``, `error`)</script>";
      } else {
        echo "<script>swal(`History generated!`, '', 'success')</script>";
      }
    } else {
      echo "<script>swal(`Error generating history`, ``, `error`)</script>";
    }
  }
}

?>
<link href="./assets/date/jquery.datetimepicker.min.css" rel="stylesheet" />
<script src="./assets/date/jquery.js"></script>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

  <!-- Page Content -->
  <div class="content pb-5">
    <!-- Quick Overview -->
    <div class="row row-deck">
      <div class="col-12">
        <input type="hidden" value='<?= json_encode($ACCOUNTS); ?>' id="accounts" />
        <form action="" class="w-100" method="post">
          <div class="row">

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="user" class="label">User</label>
                <select name="user" onchange="handleFetchUsersAccount(event)" class="form-control" id="user">
                  <option value="" selected disabled>Select User</option>
                  <?php foreach ($USERS as $user) : ?>
                    <option value="<?= $user['id']; ?>">
                      <?= $user['fullname']; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="user-accounts" class="label">User Account</label>
                <select name="user-account" class="form-control" id="user-accounts">
                  <option value="" selected disabled>Select User Account</option>
                </select>
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="recipient-name">Recipient Name</label>
                <input required type="text" class="form-control" name="recipient-name" id="recipient-name">
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="recipient-account">Recipient Account</label>
                <input required type="text" class="form-control" name="recipient-account" id="recipient-account">
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="bank">Recipient Bank</label>
                <input required type="text" list="banks" class="form-control" name="bank" id="bank">
                <datalist id="banks">
                  <?php foreach ($us_banks as $bank) : ?>
                    <option value="<?= $bank; ?>"></option>
                  <?php endforeach; ?>
                </datalist>
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="amount">Amount</label>
                <input required type="text" class="form-control" name="amount" id="amount">
              </div>
            </div>


            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="swift-code" class="form-input-label">Swift Code</label>
                <input required required type="text" id="swift-code" class="form-control form-input-field" name="swift-code" />
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="kind">Transaction Kind</label>
                <select name="kind" class="form-control" id="kind" required>
                  <option value="" selected disabled>Select Transaction Type</option>
                  <option value="wire tranfer">Wire</option>
                  <option value="tranfer">Transfer</option>
                  <option value="international transfer">International Transfer</option>
                </select>
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="type">Transaction Type</label>
                <select name="type" class="form-control" id="type">
                  <option value="" selected disabled>Select Transaction Kind</option>
                  <option value="0">Credit</option>
                  <option value="1">Debit</option>
                </select>
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="date">Date</label>
                <input required type="datetime" class="form-control date-picker" name="date" id="date">
              </div>
            </div>

            <div class="col-sm-12">
              <div class="form-group">
                <label for="date">Description</label>
                <textarea class="form-control" class="form-control" name="description"></textarea>
              </div>
            </div>

            <div class="col-12 ">
              <div class="mt-3">
                <button type="submit" name="generate" class="btn btn-primary">Generate History</button>
              </div>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</main>
<script src="./js/get_recipent.js"></script>
<script src="./assets/date/jquery.datetimepicker.full.min.js"></script>
<script>
  $('.date-picker').datetimepicker();
</script>
<!-- END Main Container -->

<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>