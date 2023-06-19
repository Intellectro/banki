<?php
require_once '../admin/inc/functions/config.php';
$title = "User Dashboard";
require_once 'inc/header.php';

?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

  <!-- Page Content -->
  <div class="content">
    <!-- Quick Overview -->
    <h2 class="content-heading">
      <i class="fa fa-angle-right text-muted mr-1"></i> Transactions
    </h2>

    <div class="row">
      <div class="col-lg-12">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">All Transactions</h3>
            <button class="btn btn-info btn-sm shadow" id="printBtn">Print Statement</button>
          </div>

          <div class="block-content">
            <!-- All Products Table -->
            <div class="table-responsive">
              <table class="table table-borderless table-striped table-vcenter">
                <thead>
                  <tr>
                    <th class="text-center" style="width: 100px;">ID</th>
                    <th class="d-none d-sm-table-cell text-center">Date</th>
                    <th>Description</th>
                    <th class="d-none d-sm-table-cell">Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $all_transactions = mysqli_fetch_all(returnQuery("SELECT * FROM transactions WHERE user_id = '$user_id' AND is_credit = 0 AND status = 'approved' ORDER BY created_at DESC"), MYSQLI_ASSOC);
                  if (count($all_transactions)) {
                    foreach ($all_transactions as $transaction) {
                      extract($transaction); ?>

                      <tr>
                        <td class="text-center font-size-sm">
                          <a style="white-space: nowrap;" class="font-w600" href="./history.php?trx-id=<?= generateTransactionId($id); ?>">
                            <strong style="white-space: nowrap;"><?= generateTransactionId($id); ?></strong>
                          </a>
                        </td>
                        <td class="d-none d-sm-table-cell text-center font-size-sm"><?= date("D j, M Y - H:i:s", strtotime($created_at)) ?></td>
                        <td class="d-none d-sm-table-cell text-left font-size-sm"><?= $description ?? "<i>NILL</i>";  ?></td>
                        <td class=" d-none d-sm-table-cell font-size-sm">
                          <?php if ($type == 0) { ?>
                            <strong class="text-success">$<?= number_format($amount, ($amount == (int)$amount) ? 0 : 2); ?></strong>
                          <?php } else { ?>
                            <strong class="text-danger">$<?= number_format($amount, ($amount == (int)$amount) ? 0 : 2); ?></strong>
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

          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>
<script src="js/get_recipent.js"></script>