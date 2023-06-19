<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';

if (isset($_POST['submit'])) {
    if (isset($_SESSION['admin'])) {
        $id = $_SESSION['admin'];
    }
    $response = setPassword($_POST, $id);
    if ($response === true) {
        echo "<script>swal('Password have been updated!', '', 'success')</script>";
    } else {
        $errors = $response;
        if (is_array($errors)) {
            foreach ($errors as $err) {
                echo "<script>swal('$err', '', 'error')</script>";
            }
        } else {
            echo "<script>swal('$errors', '', 'error')</script>";
        }
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
            <i class="fa fa-angle-right text-muted mr-1"></i> Settings
        </h2>

        <div class="row">

            <div class="col-lg-12 col-xl-12">
                <form action="" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-gear"></i>
                                </span>
                            </div>
                            <input type="password" name="password" class="form-control" placeholder="Change Password">
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-alt-success">Change Password</button>
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
<script src="js/delete_user.js"></script>
<script src="js/get_recipent.js"></script>