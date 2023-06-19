<?php
require_once '../admin/inc/functions/config.php';
require_once("./inc/banks.php");
$title = "transfer";
require_once 'inc/header.php';

$IS_ALLOWED = false;
$IS_ALLOWED_2 = false;


if (isset($_POST['submit'])) {
    if (isset($_SESSION['user'])) {
        $id = $_SESSION['user'];
        $userAccount = $_POST['sender_account'];
        $account = $_POST['recipent'];
        $amount = $_POST['amount'];
        $bank = $_POST['bank_name'];
        $acc_name = $_POST['acc_name'];
        $desc = parseQuote($_POST['desc']);
        $account_type = $_POST['account_type'];
        $routing_number = $_POST['routing_number'];

        // $query = returnQuery("SELECT * FROM allowed WHERE user_id = '$id' AND account = '$account' AND bank = '$bank'");
        // $check = mysqli_num_rows($query);

        // if (!$check) {
        //     $IS_ALLOWED = true;
        // } else {
        //     $IS_ALLOWED = false;

        // Check balance
        $accountDetails = executeQuery("SELECT * FROM accounts WHERE user_id = '$id' AND acc_number = '$userAccount'");
        $balance = floatval($accountDetails['acc_balance']);

        if ($balance < floatval($amount)) {
            echo "<script>swal(`Insuffient fund`, ``, `error`)</script>";
        } else {
            try {
                $response = returnQuery("INSERT INTO transactions (`user_id`, `type`, `account_num`, `bank_name`, `beneficiary`, `amount`, `to_user`, `routing_number`, `account_type`, `description`, `kind`, `status`) 
                    VALUES ('$id', 1, '$userAccount', '$bank', '$acc_name', $amount, '$account', '$routing_number', '$account_type', '$desc', 'ach transfer', 'pending')");

                if ($response) $IS_ALLOWED_2 = true;
                else echo "<script>swal(`Transaction failed`, ``, `error`)</script>";
            } catch (Exception $err) {
                echo "<script>swal(`$err`, ``, `error`)</script>";
            }
        }
        // }
    }
    unset($_POST['submit']);
}

$accountTypes = returnQuery("SELECT * FROM `account_type`");

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <h2 class="content-heading">
            <i class="fa fa-angle-right text-muted mr-1"></i> ACH Transfer
        </h2>

        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <form action="" method="post" class="p-3 pt-4 rounded-sm bg-white">
                    <div class="form-group">
                        <label for="sender" class="form-input-label">Sender's Account</label>
                        <select required name="sender_account" id="sender" class="form-control form-input-field">
                            <?php foreach ($userAccounts as $account) : ?>
                                <option value="<?= $account['acc_number'] ?>">
                                    <?= $account['acc_number'] . " - " . $account['acc_type'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipent" class="form-input-label">Recipent's Account</label>
                        <input required type="text" name="recipent" class="form-control form-input-field" id="recipent" />
                    </div>

                    <div class="form-group">
                        <label for="account_name" class="form-input-label">Account Name</label>
                        <input required type="text" name="acc_name" id="account_name" class="form-control form-input-field" />
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="kind" value="wire transfer">
                        <label for="bank" class="form-input-label">Bank Name</label>
                        <input required type="text" list="banks" id="bank" name="bank_name" class="form-control form-input-field">
                        <datalist id="banks">
                            <?php foreach ($us_banks as $bank) : ?>
                                <option value="<?= $bank ?>"></option>
                            <?php endforeach; ?>
                        </datalist>
                    </div>

                    <div class="form-group">
                        <label for="routing" class="form-input-label">Routing / ABA</label>
                        <input type="text" required maxLength="9" id="routing" name="routing_number" class="form-control form-input-field">
                    </div>

                    <div class="form-group">
                        <label for="type" class="form-input-label">Account Type</label>
                        <select id="type" required name="account_type" class="form-control form-input-field">
                            <option value="" disabled>Select account type</option>
                            <?php while ($accountType = mysqli_fetch_assoc($accountTypes)) : ?>
                                <option value="<?= $accountType['type'] ?>">
                                    <?= $accountType['type'] ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="account" class="form-input-label">Amount</label>
                        <input type="text" id="account" required class="form-control form-input-field" name="amount">
                    </div>

                    <div class="form-group">
                        <label for="desc" class="form-input-label">Description</label>
                        <textarea name="desc" id="desc" class="form-control form-input-field"></textarea>
                    </div>

                    <input type="hidden" id="user" name="user" value="<?= $_SESSION['user'] ?>" />

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
<?php if ($IS_ALLOWED) : ?>

    <?php
    require_once 'inc/loader.php';
    ?>
<?php endif; ?>

<?php if ($IS_ALLOWED_2) : ?>
    <?php require_once 'inc/loader2.php'; ?>
<?php endif; ?>

<?php require_once 'inc/footer.php'; ?>
<script src="js/get_recipent.js"></script>
<script src="js/transfer.js"></script>