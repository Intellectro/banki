<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';
require_once "../user/inc/banks.php";

$USERS = mysqli_fetch_all(returnQuery("SELECT * FROM users"), MYSQLI_ASSOC);
$ACCOUNTS = mysqli_fetch_all(returnQuery("SELECT * FROM accounts"), MYSQLI_ASSOC);

if (isset($_POST['generate'])) {

  $user_account = $_POST['user-account'];
  $user = $_POST['user'];
  $amount = $_POST['amount'];
  $type = $_POST['type'];
  $date = $_POST['date'];
  $description = $_POST['description'];

  $userAccount = executeQuery("SELECT * FROM accounts WHERE acc_number = '$user_account'");
  $balance = $userAccount['acc_balance'];

  if ($type == '1') {
    if (floatval($balance) < floatval($amount)) {
      echo "<script>swal(`Insuffient balance`, ``, `error`)</script>";
    } else {
      $balance = floatval($balance) - floatval($amount);
      $query = returnQuery("UPDATE accounts SET acc_balance = $balance WHERE acc_number = '$user_account'");
      if ($query) {
        $sql = "INSERT INTO transactions (user_id, account_num, type, amount, description, is_pdf, status, created_at) VALUES ('$user', '$user_account', $type,  $amount, '$description', 1, 'approved', '$date')";
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
    $query = returnQuery("UPDATE accounts SET acc_balance = $balance WHERE acc_number = '$user_account'");
    if ($query) {
      $sql = "INSERT INTO transactions (user_id, account_num, type, amount, description, is_pdf, status, created_at) VALUES ('$user', '$user_account', $type,  $amount, '$description', 1, 'approved', '$date')";
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
                <label for="type" class="label">Transaction Type</label>
                <select name="type" class="form-control" id="type">
                  <option value="" selected disabled>Select transaction type</option>
                  <option value="1">Debit</option>
                  <option value="0">Credit</option>
                </select>
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
                <label for="date">Date</label>
                <input required type="datetime" class="form-control date-picker" name="date" id="date">
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
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