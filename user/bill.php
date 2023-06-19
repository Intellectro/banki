<?php
require_once '../admin/inc/functions/config.php';
$title = "bill";
require_once 'inc/header.php';



if (isset($_POST['submit'])) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
    }
    $accountNumber = $_POST['account'];
    $accountDetails = executeQuery("SELECT * FROM accounts WHERE user_id = '$id' AND acc_number = '$accountNumber'");
    $biller = $_POST['biller'];
    $account = $_POST['account'];
    $amount = $_POST['amount'];
    $bill = $_GET['bill'];
    $ref = $_POST['reference_num'];

    // if ($query1) {
    $total_balance = $accountDetails['acc_balance'];
    $response = true;
    if ($amount <= $total_balance) {
        $sql2 = "INSERT INTO transactions(`user_id`, `beneficiary`, `type`, `amount`, `account_num`, `description`, `is_credit`, `status`) VALUES ('$id', '$biller', 1, $amount, '$account', '$bill bill', '0', 'success')";
        $query2 = validateQuery($sql2);

        if ($query2) {
            $response = true;
        }
    } else {
        $balance_err = "Insufficient Balance";
        $response = false;
        echo "<script>alert('$balance_err')</script>";
    }
    // $response = wire_transfer($_POST, $id);
    if ($response === true) {
        echo "Transfer Successful";
        echo "<script>window.location.href = 'pending.php'</script>";
    }
}

if (isset($_GET['bill'])) {
    $title = $_GET['bill'];
}

$accountTypes = returnQuery("SELECT * FROM `account_type`");

?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <h2 class="content-heading">
            <i class="fa fa-angle-right text-muted mr-1"></i> <?php echo ucfirst($title); ?> Payment
        </h2>

        <div class="row">

            <div class="col-lg-12 col-xl-12">
                <form action="" method="post" id="wire">
                    <div class="form-group">
                        <label for="sender" class="form-input-label">Account</label>
                        <select required name="account" id="sender" class="form-control form-input-field">
                            <?php foreach ($userAccounts as $account) : ?>
                                <option value="<?= $account['acc_number'] ?>">
                                    <?= $account['acc_number'] . " - " . $account['acc_type'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipent" class="form-input-label">Biller</label>
                        <input required type="text" name="biller" class="form-control form-input-field" id="recipent" />
                    </div>

                    <div class="form-group">
                        <label for="account_name" class="form-input-label">Reference Number</label>
                        <input required type="text" name="ref" id="reference_num" class="form-control form-input-field" />
                    </div>

                    <div class="form-group">
                        <label for="account_name" class="form-input-label">Amount</label>
                        <input required type="text" name="amount" id="account_name" class="form-control form-input-field" />
                    </div>

                    <input type="hidden" id="user" value="<?= $_SESSION['user'] ?>" />

                    <hr>
                    <div class="form-group" id="make_transfer">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button type="submit" id="tbtn" name="submit" class="btn btn-alt-success">Proceed</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script> -->
<script src="js/get_recipent.js"></script>
<script src="js/transfer.js"></script>