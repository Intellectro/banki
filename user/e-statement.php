<?php
require_once '../admin/inc/functions/config.php';
require_once("./inc/banks.php");
$title = "Account";
require_once 'inc/header.php';

$IS_ALLOWED_ALT = false;
$IS_FETCHED = false;

if (isset($_POST['print'])) {
  $start = sanitize($_POST['start']);
  $end = sanitize($_POST['end']);
  $id = sanitize($_POST['id']);

  $query = returnQuery("SELECT * FROM transactions WHERE created_at >= '$start' AND created_at <= '$end' AND status = 'approved' AND is_credit = 0 ORDER BY created_at DESC");
  $transactions = mysqli_fetch_all($query, MYSQLI_ASSOC);

  if (!$transactions) {
    $IS_FETCHED = false;
    echo "<script>swal('No transactions found in give dates', '', 'info');</script>";
  } else {
    $IS_FETCHED = true;
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
      <i class="fa fa-angle-right text-muted mr-1"></i> E - Statement
    </h2>

    <?php if (!$IS_FETCHED) : ?>
      <div class="row">
        <div class="col-lg-12 col-xl-12">
          <form action="" method="post" id="wire" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">

            <div class="form-group">
              <label for="start" class="form-input-label">Start Date</label>
              <input required type="date" name="start" class="form-control form-input-field" id="start" />
            </div>

            <div class="form-group">
              <label for="end" class="form-input-label">End Date</label>
              <input required type="date" name="end" class="form-control form-input-field" id="end" />
            </div>

            <input type="hidden" name="id" value="<?= $_SESSION['user'] ?>" />
            <hr>
            <div class="form-group" id="make_transfer">
              <div class="input-group">
                <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
                <div class="input-group-append">
                  <button type="submit" id="tbtn" name="print" class="btn btn-alt-success">Print</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    <?php else : ?>
      <div class="block-content">
        <!-- All Products Table -->
        <div class="table-responsive">
          <table class="table table-borderless table-striped table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 100px;">ID</th>
                <th class="d-none d-sm-table-cell text-center">Date Sent</th>
                <th>Account Number</th>
                <th class="d-none d-sm-table-cell">Amount</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (count($transactions)) {
                foreach ($transactions as $transaction) {
                  extract($transaction); ?>

                  <tr>
                    <td class="text-center font-size-sm">
                      <a style="white-space: nowrap;" class="font-w600" href="./history.php?trx-id=<?= generateTransactionId($id); ?>">
                        <strong style="white-space: nowrap;"><?= generateTransactionId($id); ?></strong>
                      </a>
                    </td>
                    <td class="d-none d-sm-table-cell text-center font-size-sm"><?= date("D j, M Y", strtotime($created_at)) ?></td>

                    <td>
                      <?php if ($type == 0) { ?>
                        <span class="badge badge-success p-2"><?= $to_user; ?></span>
                      <?php } else { ?>
                        <span class="badge badge-danger p-2"><?= $to_user; ?></span>
                      <?php } ?>
                    </td>
                    <td class=" d-none d-sm-table-cell font-size-sm">
                      <?php if ($type == 0) { ?>
                        <strong class="text-success">$<?= number_format($amount); ?></strong>
                      <?php } else { ?>
                        <strong class="text-danger">$<?= number_format($amount); ?></strong>
                      <?php } ?>
                    </td>
                  </tr>

                <?php }
              } else {
                ?>
                <tr>
                  <td colspan="4" class="text-center text-muted p-3">
                    No transactions found
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- END All Products Table -->
        <script>
          setTimeout(() => {
            window.print()
          }, 2000)
        </script>
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