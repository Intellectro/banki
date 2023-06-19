<?php
require_once '../admin/inc/functions/config.php';

if (!isset($_GET['trx-id'])) header("Location: ./index");
$id = $_GET['trx-id'];
$title = "History - $id";

// Get transaction details
$real_id = explode("-r", $_GET['trx-id'])[1];

$details = executeQuery("SELECT * FROM transactions WHERE id = $real_id ORDER BY created_at DESC");
$user_id = $details['user_id'];
$user = executeQuery("SELECT * FROM users WHERE id = '$user_id'");

require_once 'inc/header.php';

?>
<!-- END Header -->
<style>
  th {
    max-width: 250px;
    font-weight: 500;
    text-align: left;
    font-size: .9rem;
  }
  td{
    font-size: .9rem;
    color: #555;
  }
</style>

<!-- Main Container -->
<main id="main-container">

  <!-- Page Content -->
  <div class="content">
    <!-- Quick Overview -->
    <h2 class="content-heading">
      <i class="fa fa-angle-right text-muted mr-1"></i> Transactions Details [<?= $_GET['trx-id'] ?>]</h2>
    </h2>

    <div class="row">
      <div class="col-lg-12">
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Transaction</h3>
            <button class="btn btn-info btn-sm shadow" id="printBtn">Print Statement</button>
          </div>

          <div class="block-content">
            <!-- All Products Table -->
            <?php if($details['is_pdf']): 
              $trxType =   $details['type'] == '0' ? "Credit" : "Debit";
            ?>
              <div class="table-responsive">
              <table class="table table-borderless table-striped" style="table-layout: auto !important;">
                <tbody>
                  <tr>
                    <th>Transaction ID</th>
                    <td><?= $_GET['trx-id'] ?></td>
                  </tr>

                  <tr>
                    <th>Account Name</th>
                    <td><?= $user['fullname'] ?></td>
                  </tr>

                  <tr>
                    <th>Account Number</th>
                    <td><?= $details['account_num'] ?? "<i>NULL</i>" ?></td>
                  </tr>

                  <tr>
                    <th>Amount</th>
                    <td><?= $details['amount'] ?? "<i>NULL</i>" ?></td>
                  </tr>

                  <tr>
                    <th>Transaction Date</th>
                    <td><?= date("D d, M Y - H:i:s", strtotime($details['created_at'])) ?? "<i>NULL</i>" ?></td>
                  </tr>

                  <tr>
                    <th>Description</th>
                    <td><?= $details['description'] ?? "<i>NULL</i>"  ?></td>
                  </tr>

                </tbody>
              </table>
            </div>
            <?php else: ?>
              <div class="table-responsive">
              <table class="table table-borderless table-striped" style="table-layout: auto !important;">
                <tbody>
                  <tr>
                    <th>Transaction ID</th>
                    <td><?= $_GET['trx-id'] ?></td>
                  </tr>

                  <tr>
                    <th>Account Name</th>
                    <td><?= $user['fullname'] ?></td>
                  </tr>

                  <tr>
                    <th>Account Number</th>
                    <td><?= $details['account_num'] ?? "<i>NULL</i>" ?></td>
                  </tr>

                  <tr>
                    <th>Amount</th>
                    <td><?= $details['amount'] ?? "<i>NULL</i>" ?></td>
                  </tr>

                  <tr>
                    <th>Beneficiary Name</th>
                    <td><?= $details['beneficiary'] ?? "<i>NULL</i>" ?></td>
                  </tr>

                  <tr>
                    <th>Beneficiary Account</th>
                    <td><?= $details['to_user'] ?? "<i>NULL</i>" ?></td>
                  </tr>
                  
                  <tr>
                    <th>Bank Name</th>
                    <td><?= $details['bank_name'] ?? "<i>NULL</i>" ?></td>
                  </tr>
                  <?php if(isset($details['swift_code']) && $details['swift_code']): ?>
                    <tr>
                      <?php if($details['kind'] === "ach transfer"): ?>
                        <th>Routing / ABA</th>
                        <td class=""><?= $details['swift_code'] ?? "<i>NULL</i>" ?></td>
                      <?php else: ?>
                        <th>Swift Code</th>
                        <td><?= $details['swift_code'] ?? "<i>NULL</i>" ?></td>
                      <?php endif; ?>
                    </tr>
                  <?php endif; ?>

                  <tr>
                    <th>Transaction Kind</th>
                    <td style="font-weight: 600;"><?= strtoupper($details['kind']) ?? "<i>NULL</i>" ?></td>
                  </tr>

                  <tr>
                    <th>Transaction Date</th>
                    <td><?= date("D d, M Y", strtotime($details['created_at'])) ?? "<i>NULL</i>" ?></td>
                  </tr>

                  <tr>
                    <th>Description</th>
                    <td><?= $details['description'] ?? "<i>NULL</i>";  ?></td>
                  </tr>

                </tbody>
              </table>
            </div>
            <?php endif; ?>
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
<?php require_once 'inc/footer.php' ?? "<i>NULL</i>" ?>
<script src="js/get_recipent.js"></script>