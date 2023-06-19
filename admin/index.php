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
        <div class="row row-deck">
            <div class="col-6 col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="users.php">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 text-primary mb-1"><?= getTotal("users"); ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            All Users
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1"><?= getTotal("transactions"); ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Total Transactions
                        </p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-4">
                <a class="block block-rounded block-link-shadow text-center" href="javascript:void(0)">
                    <div class="block-content py-5">
                        <div class="font-size-h3 font-w600 mb-1">$<?= number_format(fetch_all_transactions()); ?></div>
                        <p class="font-w600 font-size-sm text-muted text-uppercase mb-0">
                            Transact Amount
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <!-- END Quick Overview -->

        <!-- Orders Overview -->

        <!-- END Orders Overview -->

        <!-- Top Products and Latest Orders -->
        <div class="row">

            <div class="col-xl-12">
                <!-- Latest Orders -->
                <div class="block block-rounded">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Latest Transactions</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                <i class="si si-refresh"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="table-responsive table-responsive-lg">
                            <table class="table table-borderless table-striped table-vcenter font-size-sm">
                                <tbody>
                                    <?php
                                    $all_transactions = mysqli_fetch_all(returnQuery("SELECT * FROM transactions WHERE is_credit = 0 ORDER BY created_at DESC LIMIT 10"), MYSQLI_ASSOC);
                                    foreach ($all_transactions as $transactions) {
                                        extract($transactions);
                                        $user = executeQuery("SELECT * FROM users WHERE id = '$user_id'");

                                        if ($type == 0) {
                                            $class = "text-success";
                                            $message = "Received from";
                                        } else if ($type == 1) {
                                            $class = "text-danger";
                                            $message = "Delivered to";
                                        }


                                    ?>

                                        <tr>
                                            <td class="font-w600 text-center" style="width: 100px;">
                                                <a href="#" style="white-space: nowrap;"><?= generateTransactionId($id); ?></a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <a href="#" style="white-space: nowrap; text-overflow: ellipsis;"><?= $user ? $user['fullname'] : "<i>Nill</i>"; ?></a>
                                            </td>
                                            <td>
                                                <span style="white-space: nowrap; text-overflow: ellipsis;"><?= $description ? sub_word($description, 3) : "<i>No description</i>"; ?></span>
                                            </td>
                                            <td class="font-w600 text-right <?= $class ?>">$<?= number_format($amount, ($amount == (int)$amount) ? 0 : 2); ?></td>
                                            <td class="font-w600 text-right"><a href="backdate.php" style="white-space: nowrap;"><strong><?= date("M d, Y - h:i", strtotime($created_at)); ?></a></td>
                                            <td>
                                            <td class="font-w600 text-right">
                                                <div class="d-flex align-items-center">
                                                    <a href="backdate.php?id=<?= $transactions['id']; ?>" style="white-space: nowrap; text-overflow: ellipsis;" class="shadow btn btn-sm btn-primary">Backdate Transaction</a>
                                                    <a href="./handler/delete.php?delete=<?= $transactions['id']; ?>" style="white-space: nowrap; text-overflow: ellipsis;" class="shadow btn btn-sm btn-danger ml-2">Delete Transaction</a>
                                                </div>
                                            </td>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Latest Orders -->
            </div>
        </div>
        <!-- END Top Products and Latest Orders -->
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>