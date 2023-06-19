<?php
require_once '../admin/inc/functions/config.php';
require_once("./inc/banks.php");
$title = "Zelle";
require_once 'inc/header.php';

$IS_ALLOWED_ALT = false;

if (isset($_POST['phone'])) {

  $id = $_SESSION['user'];
  $phone = $_POST['phone'];
  $amount = $_POST['amount'];

  $result = returnQuery("INSERT INTO zelle (user, phone, amount) VALUES ('$id', '$phone', $amount)");
  if ($result) {
    $IS_ALLOWED_ALT = true;
  } else {
    $IS_ALLOWED_ALT = false;
    echo "<script>swal(`Something went wrong`, `please try again`, `error`)</script>";
  }
}

if (isset($_POST['email'])) {

  $id = $_SESSION['user'];
  $email = $_POST['email'];
  $amount = $_POST['amount'];

  $result = returnQuery("INSERT INTO zelle (email, amount, user) VALUES ('$email', $amount, '$id')");
  if ($result) {
    $IS_ALLOWED_ALT = true;
  } else {
    $IS_ALLOWED_ALT = false;
    echo "<script>swal(`Something went wrong`, `please try again`, `error`)</script>";
  }
}

if (isset($_POST['account'])) {
  $id = $_SESSION['user'];
  $recipient = $_POST['recipient'];
  $account = $_POST['account'];
  $amount = $_POST['amount'];
  $routing = $_POST['routing'];

  $result = returnQuery("INSERT INTO zelle (user, recipient, account, amount, routing) VALUES ('$id', '$recipient', '$account', '$amount', '$routing')");
  if ($result) {
    $IS_ALLOWED_ALT = true;
  } else {
    $IS_ALLOWED_ALT = false;
    echo "<script>swal(`Something went wrong`, `please try again`, `error`)</script>";
  }
}


?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

  <!-- Page Content -->
  <div class="content">
    <!-- Quick Overview -->
    <h2 class="content-heading">
      <i class="fa fa-angle-right text-muted mr-1"></i> Zelle
    </h2>

    <!-- FOR BLOCK / STOLEN CARDS -->
    <?php if (isset($_GET['page']) && $_GET['page'] === "phone") : ?>
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <form action="" method="post" id="wire" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">

            <div class="form-group">
              <label for="phone" class="form-input-label">Phone Number</label>
              <input required type="text" name="phone" class="form-control form-input-field" id="phone" />
            </div>

            <div class="form-group">
              <label for="amount" class="form-input-label">Amount</label>
              <input required type="text" name="amount" class="form-control form-input-field" id="amount" />
            </div>

            <input type="hidden" id="user" value="<?= $_SESSION['user'] ?>" />
            <hr>
            <div class="form-group" id="make_transfer">
              <div class="input-group">
                <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
                <div class="input-group-append">
                  <button type="submit" id="tbtn" name="phone" class="btn btn-alt-success">Proceed</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php endif; ?>

    <?php if (isset($_GET['page']) && $_GET['page'] === "account") : ?>
      <!-- NEW -->
      <div class="row">

        <div class="col-lg-12 col-xl-12">
          <form action="" method="post" id="wire" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">
            <div class="form-group">
              <label for="recipient" class="form-input-label">Receiver's name</label>
              <input required type="text" name="recipient" class="form-control form-input-field" id="recipient" />
            </div>

            <div class="form-group">
              <label for="account" class="form-input-label">Account</label>
              <input required type="text" name="account" class="form-control form-input-field" id="account" />
            </div>

            <div class="form-group">
              <label for="routing" class="form-input-label">Routing / ABA</label>
              <input required type="text" name="routing" class="form-control form-input-field" id="routing" />
            </div>

            <div class="form-group">
              <label for="amount" class="form-input-label">Amount</label>
              <input required type="text" name="amount" class="form-control form-input-field" id="amount" />
            </div>

            <input type="hidden" id="user" value="<?= $_SESSION['user'] ?>" />

            <hr>
            <div class="form-group" id="make_transfer">
              <div class="input-group">
                <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
                <div class="input-group-append">
                  <button type="submit" id="tbtn" name="account" class="btn btn-alt-success">Proceed</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php endif; ?>

    <?php if (isset($_GET['page']) && $_GET['page'] === "email") : ?>
      <!-- NEW -->
      <div class="row">

        <div class="col-lg-12 col-xl-12">
          <form action="" method="post" id="wire" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">

            <div class="form-group">
              <label for="email" class="form-input-label">Email</label>
              <input required type="email" name="email" class="form-control form-input-field" id="email" />
            </div>

            <div class="form-group">
              <label for="amount" class="form-input-label">Amount</label>
              <input required type="text" name="amount" class="form-control form-input-field" id="amount" />
            </div>
            <input type="hidden" id="user" value="<?= $_SESSION['user'] ?>" />

            <hr>
            <div class="form-group" id="make_transfer">
              <div class="input-group">
                <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
                <div class="input-group-append">
                  <button type="submit" id="tbtn" name="email" class="btn btn-alt-success">Proceed</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php endif; ?>
  </div>

  <div class="proccessing-pin-modal">

  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php if ($IS_ALLOWED_ALT) : ?>
  <?php require_once 'inc/loader2.php'; ?>
<?php endif; ?>


<?php require_once 'inc/footer.php'; ?>
<script src="js/get_recipent.js"></script>
<script src="js/transfer.js"></script>