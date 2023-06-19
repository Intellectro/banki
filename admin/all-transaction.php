<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';

?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">
  <?php include("./inc/alert.php"); ?>

  <!-- Page Content -->
  <div class="content">
    <!-- Quick Overview -->
    <h2 class="content-heading">
      <i class="fa fa-angle-right text-muted mr-1"></i> All Transactions
    </h2>

    <div class="row">
      <div class="col-lg-12">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">All Transactions</h3>

          </div>

          <div class="block-content">
            <!-- All Products Table -->
            <div class="table-responsive">
              <table class="table table-borderless table-striped table-vcenter">
                <thead>
                  <tr>
                    <th>Transaction ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <td></td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $all_transactions = mysqli_fetch_all(returnQuery("SELECT * FROM transactions WHERE is_credit = 0 ORDER BY created_at DESC"), MYSQLI_ASSOC);
                  foreach ($all_transactions as $transactions) {
                    $user_id = $transactions['user_id'];
                    $user = executeQuery("SELECT * FROM users WHERE id = '$user_id'");

                    if ($transactions['type'] == 0) {
                      $class = "text-success";
                    } else if ($transactions['type'] == 1) {
                      $class = "text-danger";
                    }


                  ?>

                    <tr>
                      <td class="font-w600 text-center" style="width: 100px;">
                        <a href="#" style="white-space: nowrap;"><?= generateTransactionId($transactions['id']); ?></a>
                      </td>
                      <td class="d-none d-sm-table-cell">
                        <!-- <a href="#" style="white-space: nowrap; text-overflow: ellipsis;"><?= $user ? $user['fullname'] : "<i>Nill</i>"; ?></a> -->
                        <a href="#" style="white-space: nowrap; text-overflow: ellipsis;"><?= $transactions['beneficiary'] ?? "<i>Nill</i>"; ?></a>
                      </td>
                      <td>
                        <span style="white-space: nowrap; text-overflow: ellipsis;"><?= $transactions['description'] ? sub_word($transactions['description'], 8) : "<i>No description</i>"; ?></span>
                      </td>
                      <td class="font-w600 text-right <?= $class ?>">$<?= number_format($transactions['amount'], ($transactions['amount'] == (int)$transactions['amount']) ? 0 : 2); ?></td>
                      <td class="font-w600 text-right"><a href="backdate.php" style="white-space: nowrap;"><strong><?= date("M d, Y - h:i", strtotime($transactions['created_at'])); ?></a></td>
                      <td class="font-w600 text-right">
                        <div class="d-flex align-items-center">
                          <a href="backdate.php?id=<?= $transactions['id']; ?>" style="white-space: nowrap; text-overflow: ellipsis;" class="shadow btn btn-sm btn-primary">Backdate Transaction</a>
                          <a href="./handler/delete.php?delete=<?= $transactions['id']; ?>" style="white-space: nowrap; text-overflow: ellipsis;" class="shadow btn btn-sm btn-danger ml-2">Delete Transaction</a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
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
<script src="js/approve.js"></script>