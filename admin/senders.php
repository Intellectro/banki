<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';
require_once "../user/inc/banks.php";

$USERS = mysqli_fetch_all(returnQuery("SELECT * FROM users"), MYSQLI_ASSOC);
$ACCOUNTS = mysqli_fetch_all(returnQuery("SELECT * FROM accounts"), MYSQLI_ASSOC);

if (isset($_POST['generate'])) {
  $bank = sanitize($_POST['bank']);
  $account = sanitize($_POST['account']);
  $user = sanitize($_POST['user']);

  $notSuccessful = returnQuery("INSERT INTO allowed (user_id, account, bank) VALUES ('$user', '$account', '$bank')");

  if (!$notSuccessful) {
    echo "<script>swal(`Something went wrong. Please try again.`, '', 'error')</script>";
  } else {
    echo "<script>swal(`Configuration set successfully!`, '', 'success')</script>";
  }
}
?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

  <!-- Page Content -->
  <div class="content">
    <!-- Quick Overview -->
    <div class="row row-deck">
      <div class="col-12">
        <form action="" class="w-100" method="post">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="user">User</label>
                <select name="user" class="form-control" id="user" required>
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
                <label for="account">Allowed Account Number</label>
                <input required type="text" class="form-control" name="account" id="account">
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="bank">Allowed Bank</label>
                <input required type="text" list="banks" class="form-control" name="bank" id="bank">
                <datalist id="banks">
                  <?php foreach ($us_banks as $bank) : ?>
                    <option value="<?= $bank ?>"></option>
                  <?php endforeach; ?>
                </datalist>
              </div>
            </div>
            <div class="col-12">
              <div class="mt-3">
                <button type="submit" name="generate" class="btn btn-primary">Set config</button>
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
<!-- END Main Container -->

<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>