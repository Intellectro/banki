<?php
require_once '../admin/inc/functions/config.php';
require_once("./inc/banks.php");
$title = "Mobile Deposit";
require_once 'inc/header.php';

$IS_ALLOWED = false;
$IS_ALLOWED_ALT = false;

function uploadFiles ($files, &$errors) {
  $names = [];
  foreach ($files as $file) {
    $name = time() . $file['name'];
    $destination = "../admin/user_upload/";

    if($file['size'] > (2 * 1024 * 1024)){
      $errors[] = "File size is too large";
      return false;
    }

    if(!move_uploaded_file($file['tmp_name'], $destination.$name)){
      $errors[] = "File not uploaded";
      return false;
    }
    $names[] = $name;
  }

  return $names;
}


if (isset($_POST['submit'])) {
  if (isset($_SESSION['user'])) {

    $id = $_SESSION['user'];
    $front = $_FILES['front'];
    $back = $_FILES['back'];

    $files = [$front, $back];
    $errors = [];
    $filenames = uploadFiles($files, $errors);
    if (!$filenames) {
      foreach ($errors as $error) {
        echo "<script>swal(`$error`, ``, `error`)</script>";
      }
    }
    else {
      // Add to db
      $frontFile = $filenames[0];
      $backFile = $filenames[1];
      // Table: - id, - user, - front, - back, - date
      $result = returnQuery("INSERT INTO mobile_deposit(user, front, back) VALUES ('$id', '$frontFile', '$backFile')");
      if($result) {
        $IS_ALLOWED_ALT = true;
      }
      else {
        echo "<script>swal(`Something went wrong`, `please try again`, `error`)</script>";
      }
    }
    
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

    <div class="row">

      <div class="col-lg-12 col-xl-12">
        <form action="" enctype="multipart/form-data" method="post" id="wire" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">

          <div class="form-group">
            <label for="front" class="form-input-label">Front check copy</label>
            <input required type="file" accept="image/*, .pdf" name="front" class="form-control form-input-field" id="front" />
          </div>

          <div class="form-group">
            <label for="back" class="form-input-label">Back check copy</label>
            <input required type="file" accept="image/*, .pdf" name="back" class="form-control form-input-field" id="back" />
          </div>

          <input type="hidden" id="user" value="<?= $_SESSION['user'] ?>" />

          <hr>
          <div class="form-group" id="make_transfer">
            <div class="input-group">
              <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
              <div class="input-group-append">
                <button type="submit" id="tbtn" name="submit" class="btn btn-alt-success">Proceed</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
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

<!-- Footer -->
<?php if ($IS_ALLOWED) : ?>
  <?php require_once 'inc/loader.php'; ?>
<?php endif; ?>

<?php require_once 'inc/footer.php'; ?>
<script src="js/get_recipent.js"></script>
<script src="js/transfer.js"></script>