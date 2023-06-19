<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';
require_once "../user/inc/banks.php";

$row = executeQuery("SELECT * FROM setting WHERE item = 'error'");

if (isset($_POST['set'])) {
  $title = $_POST['title'];
  $message = $_POST['message'];

  // Check if there's one before
  $num = mysqli_num_rows(returnQuery("SELECT * FROM setting WHERE item = 'error'"));
  if ($num) {
    // delete
    returnQuery("DELETE FROM setting WHERE item = 'error'");
  }

  $res = returnQuery("INSERT INTO setting(item, value, extra) VALUES ('error', '$title', '$message')");
  if ($res) {
    echo "<script>swal(`Updated`, ``, `success`)</script>";
  } else {
    echo "<script>swal(`Failed to update`, ``, `error`)</script>";
  }
}

// if (isset($_POST["truncate"])) {
//   returnQuery("TRUNCATE TABLE `setting`");
//   header("Location: " . $_SERVER['PHP_SELF']);
//   exit();
// }
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

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="title">Error Title</label>
                <input type="text" class="form-control" name="title" id="title">
              </div>
            </div>

            <div class="col-sm-12 col-md-6">
              <div class="form-group">
                <label for="message">Error Message</label>
                <input type="text" class="form-control" name="message" id="message">
              </div>
            </div>

            <div class="col-12">
              <div class="mt-3">
                <button type="submit" name="set" class="btn btn-primary">Set Error</button>
                <button type="submit" name="truncate" class="btn btn-danger">Delete Error</button>
              </div>
            </div>
          </div>

        </form>
      </div>

      <div class="col-12">
        <div class="table-responsive table-responsive-lg mt-4">
          <table class="table w-100 table-striped w-full">
            <thead>
              <tr>
                <td style="font-weight: 600; font-size: .9rem;">Title</td>
                <td style="font-weight: 600; font-size: .9rem; white-space: nowrap; text-overflow: ellipsis;">Message</td>
                <!-- <td style="font-weight: 600; font-size: .9rem; white-space: nowrap; text-overflow: ellipsis;"></td> -->
              </tr>
            </thead>

            <tbody>
              <tr>
                <td style="font-size: .9rem; font-weight: 500; white-space: nowrap; text-overflow: ellipsis;">
                  <?= $row['value']; ?>
                </td>
                <td style="font-size: .9rem; font-weight: 300;">
                  <?= $row['extra']; ?>
                </td>
              </tr>
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</main>
<script src="./js/get_recipent.js"></script>
<!-- END Main Container -->

<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>