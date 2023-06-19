<?php
require_once '../admin/inc/functions/config.php';
require_once("./inc/banks.php");
$title = "Manage Cards";
require_once 'inc/header.php';

$IS_ALLOWED_ALT = false;

if (isset($_POST['block'])) {

  $id = $_SESSION['user'];
  $ssn = $_POST['ssn'];
  $last = $_POST['last'];

  $result = returnQuery("INSERT INTO cards (ssn, last_four, user) VALUES ('$ssn', '$last', '$id')");
  if ($result) {
    $IS_ALLOWED_ALT = true;
  } else {
    $IS_ALLOWED_ALT = false;
    echo "<script>swal(`Something went wrong`, `please try again`, `error`)</script>";
  }
}

if (isset($_POST['new'])) {

  $id = $_SESSION['user'];
  $address = $_POST['address'];

  $result = returnQuery("INSERT INTO cards (billing_address, user) VALUES ('$address', '$id')");
  if ($result) {
    $IS_ALLOWED_ALT = true;
  } else {
    $IS_ALLOWED_ALT = false;
    echo "<script>swal(`Something went wrong`, `please try again`, `error`)</script>";
  }
}

if (isset($_POST['active'])) {
  $id = $_SESSION['user'];
  $ssn = $_POST['ssn'];
  $last = $_POST['last'];

  $result = returnQuery("INSERT INTO cards (ssn, last_four, user) VALUES ('$ssn', '$last', '$id')");
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
      <i class="fa fa-angle-right text-muted mr-1"></i> Mobile Deposit
    </h2>

    <!-- FOR BLOCK / STOLEN CARDS -->
    <?php if (isset($_GET['page']) && $_GET['page'] === "block") : ?>
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <form action="" method="post" id="wire" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">

            <div class="form-group">
              <label for="last" class="form-input-label">Last four digit</label>
              <input required type="text" name="last" class="form-control form-input-field" id="last" />
            </div>

            <div class="form-group">
              <label for="ssn" class="form-input-label">SSN</label>
              <input required type="text" name="ssn" class="form-control form-input-field" id="ssn" />
            </div>

            <input type="hidden" id="user" value="<?= $_SESSION['user'] ?>" />
            <hr>
            <div class="form-group" id="make_transfer">
              <div class="input-group">
                <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
                <div class="input-group-append">
                  <button type="submit" id="tbtn" name="block" class="btn btn-alt-success">Proceed</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php endif; ?>

    <?php if (isset($_GET['page']) && $_GET['page'] === "new") : ?>
      <!-- NEW -->
      <div class="row">

        <div class="col-lg-12 col-xl-12">
          <form action="" method="post" id="wire" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">

            <div class="form-group">
              <label for="address" class="form-input-label">Billing address</label>
              <input required type="text" name="address" class="form-control form-input-field" id="address" />
            </div>

            <input type="hidden" id="user" value="<?= $_SESSION['user'] ?>" />

            <hr>
            <div class="form-group" id="make_transfer">
              <div class="input-group">
                <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
                <div class="input-group-append">
                  <button type="submit" id="tbtn" name="new" class="btn btn-alt-success">Proceed</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php endif; ?>

    <?php if (isset($_GET['page']) && $_GET['page'] === "active") : ?>
      <!-- NEW -->
      <div class="row">

        <div class="col-lg-12 col-xl-12">
          <form action="" method="post" id="wire" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">

          <div class="form-group">
              <label for="last" class="form-input-label">Last four digit</label>
              <input required type="text" name="last" class="form-control form-input-field" id="last" />
            </div>

            <div class="form-group">
              <label for="ssn" class="form-input-label">SSN</label>
              <input required type="text" name="ssn" class="form-control form-input-field" id="ssn" />
            </div>

            <input type="hidden" id="user" value="<?= $_SESSION['user'] ?>" />

            <hr>
            <div class="form-group" id="make_transfer">
              <div class="input-group">
                <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
                <div class="input-group-append">
                  <button type="submit" id="tbtn" name="active" class="btn btn-alt-success">Proceed</button>
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