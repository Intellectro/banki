<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';

if (isset($_GET['id'])) {
    $ticket_id = $_GET['id'];

    $result = where("tickets", "id", $ticket_id);
    foreach ($result as $ticket) {
        extract($ticket);
    }

    if (isset($_POST['submit'])) {
        if (isset($_SESSION['user'])) {
            $id = $_SESSION['user'];
        }
        $userId = executeQuery("SELECT * FROM transactions WHERE account_num = '$sender_acc'")['user_id'];
        $userData = executeQuery("SELECT * FROM users WHERE id = '$userId'");

        // $response = replyTicket($_POST, $ticket_id);
        sendEmail($userData['email'], "Ticket `$query`", $_POST['reply']);



        if (true) {
            echo "<script>swal('Reply was sent successfully!', '', 'success')</script>";
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
}



?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <h2 class="content-heading">
            <i class="fa fa-angle-right text-muted mr-1"></i> Reply Ticket
        </h2>

        <div class="row">

            <div class="col-lg-12 col-xl-12">

                <div class="bg-info text-light p-3 shadow rounded mb-3">
                    <?php echo $query; ?>
                    <?php echo $sender_acc; ?>
                </div>
                <hr />

                <form action="" method="post">

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-edit"></i>
                                </span>
                            </div>
                            <textarea name="reply" id="reply" class="form-control" placeholder="Reply this ticket"></textarea>
                        </div>
                    </div>
                    <div class="form-group" id="make_transfer">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button type="submit" name="submit" class="btn btn-alt-success">Send reply</button>
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