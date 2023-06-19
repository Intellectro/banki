<?php
if (!isset($_GET['acc'])) header("Location: ./");
$ACCOUNT = $_GET['acc'];
?>
<?php
require_once '../admin/inc/functions/config.php';
$title = "User Dashboard";

require_once 'inc/header.php';

$USER_ACCOUNT = array_values(array_filter($userAccounts, function ($acc) {
  global $ACCOUNT;
  return $acc['acc_number'] == $ACCOUNT;
}))[0];

$IS_ALLOWED = false;
?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

  <!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER START -->
  <div class="row">
    <div class="col-12">
      <iframe src="//www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=1000&s=1&mc=GBP&mbg=F0F0F0&bs=no&bc=000044&f=Verdana&fs=10px&fc=0D443B&lc=2ED1C2&lhc=FE9A00&vc=FE9A00&vcu=008000&vcd=FF0000&" width="100%" height="30" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
      <!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER END -->
    </div>
  </div>

  <!-- Page Content -->
  <div class="content">
    <?php $TRANSFER = executeQuery("SELECT SUM(amount) as total FROM transactions WHERE user_id = '$user_id' AND type = 1 AND account_num = '$ACCOUNT'"); ?>
    <div class="block block-rounded invisible" data-toggle="appear">
      <div class="block-content block-content-full">
        <div class="row">
          <div class="col-12">
            <h2 style="font-size: 1rem; text-align: left; text-transform: uppercase; font-weight: 700; color: #ccc; letter-spacing: 2px;">
              <?= $USER_ACCOUNT['acc_type']; ?>
            </h2>
          </div>
          <div class="col-md-4 py-3">
            <div class="font-size-h1 font-w300 text-black mb-1">
              USD $<?= number_format($USER_ACCOUNT['acc_balance'], ($USER_ACCOUNT['acc_balance'] == (int)$USER_ACCOUNT['acc_balance']) ? 0 : 2); ?>
            </div>
            <a class="link-fx font-size-sm font-w700 text-uppercase text-muted" href="javascript:void(0)">Available Balance</a>
          </div>
          <div class="col-md-4 py-3">
            <div class="font-size-h1 font-w300 text-success mb-1">
              USD $<?= number_format(fetchUsersTransactions(0, $user_id, $USER_ACCOUNT['acc_number'])); ?>
            </div>
            <a class="link-fx font-size-sm font-w700 text-uppercase text-muted" href="javascript:void(0)">Current Balance</a>
          </div>
          <div class="col-md-4 py-3">
            <div class="font-size-h1 font-w300 text-danger mb-1">
              USD -$<?= number_format($TRANSFER['total']); ?>
            </div>
            <a class="link-fx font-size-sm font-w700 text-uppercase text-muted" href="javascript:void(0)">Total Transfers</a>
          </div>
        </div>
      </div>
    </div>


    <!-- Latest Transactions -->
    <h2 class="content-heading"> <i class="fa fa-angle-right text-muted mr-1"></i> Latest Transactions </h2>

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
            $all_transactions = mysqli_fetch_all(returnQuery("SELECT * FROM transactions WHERE is_credit = 0 AND account_num = '$ACCOUNT' AND status = 'approved' AND user_id = '$user_id' ORDER BY created_at DESC"), MYSQLI_ASSOC);
            if (count($all_transactions)) {
              foreach ($all_transactions as $transaction) {
                extract($transaction); ?>

                <tr>
                  <td class="text-center font-size-sm">
                    <a style="white-space: nowrap;" class="font-w600" href="./history.php?trx-id=<?= generateTransactionId($id); ?>">
                      <strong style="white-space: nowrap;"><?= generateTransactionId($id); ?></strong>
                    </a>
                  </td>
                  <td class="d-none d-sm-table-cell text-center font-size-sm"><?= date("D j, M Y", strtotime($created_at)) ?></td>
                  <td class="d-none d-sm-table-cell text-left font-size-sm"><?= $description; ?></td>
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

    </div>
    <!-- END View More -->
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->
<?php if ($IS_ALLOWED) : ?>
  <?php include("./inc/loader.php"); ?>
<?php endif; ?>
<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>