<?php
require_once '../admin/inc/functions/config.php';
require_once("./inc/banks.php");
// require_once("./inc/banks.php");
require_once("./inc/country.php");
$title = "transfer";
require_once 'inc/header.php';

$IS_ALLOWED = false;
$IS_ALLOWED_2 = false;


if (isset($_POST['submit'])) {
    // print_r($_POST);
    // die();
    if (isset($_SESSION['user'])) {
        $id = mysqli_real_escape_string($link, $_SESSION['user']);
        $account = mysqli_real_escape_string($link, $_POST['recipent']);
        $bank = mysqli_real_escape_string($link, $_POST['bank_name']);

        // $query = returnQuery("SELECT * FROM allowed WHERE user_id = '$id' AND account = '$account' AND bank = '$bank'");
        // $check = mysqli_num_rows($query);

        // $data = mysqli_fetch_assoc($query);
        $_POST["type"] = 1;

        // if (!$check) {
        //     $IS_ALLOWED = true;
        // } else {
        //     $IS_ALLOWED = false;
        $response = wire_transfer($_POST, $id);
        if ($response === true) {
            $IS_ALLOWED_2 = true;
        } else {
            $errors = $response;
            if (is_array($errors)) {
                foreach ($errors as $err) {
                    echo "<script>swal(`$err`, ``, `error`)</script>";
                }
            } else {
                echo "<script>swal(`$errors`, ``, `error`)</script>";
            }
        }
        // }
    }
    unset($_POST['submit']);
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
            <i class="fa fa-angle-right text-muted mr-1"></i> Wire Transfer
        </h2>

        <div class="row">

            <div class="col-lg-12 col-xl-12">
                <form action="" method="post" id="wire" class="p-3 pt-4 rounded-sm bg-white">
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
                        <label for="swift" class="form-input-label">Swift Code</label>
                        <input type="text" required name="swift_code" id="swift" class="form-control form-input-field">
                    </div>

                    <input type="hidden" value="1" name="type" />

                    <div class="form-group">
                        <label for="country" class="form-input-label">Country</label>
                        <select name="country" id="country" required class="form-control form-input-field">
                            <option value="" selected disabled>Select country</option>
                            <?php foreach ($countries as $country) : ?>
                                <option value="<?= ucfirst($country['name']); ?>">
                                    <?= ucfirst($country['name']); ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="amount" class="form-input-label">Amount</label>
                        <input type="text" id="amount" required class="form-control form-input-field" name="amount">
                    </div>

                    <div class="form-group">
                        <label for="desc" class="form-input-label">Description</label>
                        <textarea name="desc" id="desc" class="form-control form-input-field"></textarea>
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
<?php if ($IS_ALLOWED) : ?>
    <?php require_once 'inc/loader.php'; ?>
<?php endif; ?>

<?php if ($IS_ALLOWED_2) : ?>
    <?php require_once 'inc/loader2.php'; ?>
<?php endif; ?>

<?php require_once 'inc/footer.php'; ?>
<script src="js/get_recipent.js"></script>
<script src="js/transfer.js"></script>