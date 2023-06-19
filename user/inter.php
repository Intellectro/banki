<?php
require_once '../admin/inc/functions/config.php';
require_once("./inc/banks.php");
$title = "transfer";
require_once 'inc/header.php';

$IS_ALLOWED = false;


if (isset($_POST['submit'])) {
    $id = $_SESSION['user'];
    $account = $_POST['recipent'];
    $bank = $_POST['bank_name'];

    $query = returnQuery("SELECT * FROM allowed WHERE user_id = '$id' AND account = '$account' AND bank = '$bank'");
    $check = mysqli_num_rows($query);
    $data = mysqli_fetch_assoc($query);

    if (!$check) {
        $IS_ALLOWED = true;
    }
    else {
        $response = wire_transfer($_POST, $id);
        if ($response === true) {
            echo "<script>swal(`Transaction request sent`, `Transaction awaiting approval`, `success`)</script>";
        } else {
            $errors = $response;
            if (is_array($errors)) {
                foreach ($errors as $err) {
                    echo "<script>alert('$err')</s>";
                }
            } else {
                echo "<script>alert('$errors')</script>";
            }
        }
    }

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
            <i class="fa fa-angle-right text-muted mr-1"></i> Inter Bank Transfer
        </h2>

        <div class="row">

            <div class="col-lg-12 col-xl-12">
                <form action="" method="post" id="wire" onsubmit="handleStartLoading(event)" class="p-3 pt-4 rounded-sm bg-white">
                    <div class="form-group">
                        <label for="sender" class="form-input-label">Sender's Account</label>
                        <select required name="sender_account" id="sender" class="form-control form-input-field">
                            <?php foreach($userAccounts as $account): ?>
                                <option value="<?= $account['acc_number'] ?>">
                                    <?= $account['acc_number'] . " - " . $account['acc_type'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="recipent" class="form-input-label">Account Number</label>
                        <input required type="text" name="recipent" class="form-control form-input-field" id="recipent" />
                    </div>

                    <div class="form-group">
                        <label for="name" class="form-input-label">Beneficiary Name</label>
                        <input required type="text" name="acc_name" id="name" class="form-control form-input-field" />
                    </div>
                    
                    <div class="form-group">
                        <label for="bank" class="form-input-label">Bank Name</label>
                        <input required type="text" list="banks" id="bank" name="bank_name" class="form-control form-input-field" >
                        <datalist id="banks">
                            <?php foreach ($us_banks as $bank): ?>
                                <option value="<?= $bank ?>"></option>
                            <?php endforeach; ?>
                        </datalist>
                    </div>
                    
                    <div class="form-group">
                        <label for="swift" class="form-input-label">Swift Code</label>
                        <input type="hidden" name="kind" value="transfer">
                        <input required type="text" id="swift" name="swift_code" class="form-control form-input-field" />
                    </div>

                    <div class="form-group">
                        <label for="route" class="form-input-label">Routing Number</label>
                        <input required type="text" id="route" maxLength="9" name="routing_number" class="form-control form-input-field">
                    </div>

                    <div class="form-group">
                        <label for="type" class="form-input-label">Account Type</label>
                        <select required name="type" id="type" name="type" class="form-control form-input-field">
                            <option value="" selected disabled>Select account type</option>
                            <?php while($accountType = mysqli_fetch_assoc($accountTypes)): ?>
                                <option value="<?= $accountType['type']?>"> 
                                    <?= $accountType['type'] ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="amount" class="form-input-label">Amount</label>
                        <input required type="text" id="amount" class="form-control form-input-field" name="amount" />
                    </div>

                    <div class="form-group">
                        <label for="desc" class="form-input-label">Description</label>
                        <textarea name="desc" id="desc" class="form-control form-input-field" placeholder="Enter transaction description"></textarea>
                    </div>

                    <input type="hidden" id="user" value="<?= $_SESSION['user']?>" />

                    <hr>
                    <div class="form-group" id="make_transfer">
                        <div class="input-group">
                            <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
                            <div class="input-group-append">
                                <button type="submit" id="tbtn" name="submit" onclick="handleStartLoading(event)" class="btn btn-alt-success">Proceed</button>
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
<?php if($IS_ALLOWED):?>
    <?php require_once 'inc/loader.php'; ?>
<?php endif; ?>

<?php require_once 'inc/footer.php'; ?>
<script src="js/get_recipent.js"></script>
<script src="js/transfer.js"></script>