<?php
require_once '../admin/inc/functions/config.php';
require_once("./inc/banks.php");
$title = "Help Center";
require_once 'inc/header.php';

$user_id = $_SESSION['user'];

$user_details = executeQuery("SELECT * FROM users WHERE id = '$user_id'");

$QUESTIONS = ["What is your mother's maiden name?", "What is your first pet's name?", "What is your favorite sports team?", "What was the name of your first school?", "Where were you born?", "What is your favorite movie?", "What is your favorite color?", "What is your favorite food?", "What is your favorite hobby?", "What is the name of your first car?"];

$IS_ALLOWED_ALT = false;

?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">
  <?php include("./inc/alert.php"); ?>

  <!-- Page Content -->
  <div class="content">
    <!-- Quick Overview -->
    <h2 class="content-heading">
      <i class="fa fa-angle-right text-muted mr-1"></i> Settings
    </h2>


    <div class="row">
      <div class="col-lg-12 col-xl-12">
        <div class="p-3 pt-4 rounded-sm bg-white">
          <h3 style="font-size: 1rem;" class="h6 text-uppercase mb-4">Bank Information</h3>

          <div class="mb-3">
            <div for="fullname" class="form-input-label font-w600" style="font-weight: 600;">Phone No.</div>
            <div class="row">
              <div class="col-12">
                <p class="text-sm mb-0">
                  <a href="tel:+14433325687" style="text-decoration: none; font-size: .85rem;">+1-800-jekocfu</a>
                </p>
              </div>
            </div>
          </div>

          <div class="mb-2">
            <div for="fullname" class="form-input-label font-w600" style="font-weight: 600;">Customer Care Email.</div>
            <div class="row">
              <div class="col-12">
                <p class="text-sm mb-2">
                  <a href="mailto:beckynecky642@gmail.com" style="text-decoration: none; font-size: .85rem;">customercare@jekocfu.com</a>
                </p>
                <p class="text-sm mt-1">
                  <a href="mailto:olivialevine4@gmail.com" style="text-decoration: none; font-size: .85rem;">relations@jekocfu.com</a>
                </p>
              </div>
            </div>
          </div>

          <hr>

          <h3 style="font-size: 1rem;" class="h6 text-uppercase my-4">Send us a message</h3>
          <div class="row">
            <div class="col-lg-12 col-xl-12">
              <form action="./handler/message.php" method="post">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                      <label for="fullname" class="form-input-label">Full Name</label>
                      <input type="text" name="fullname" class="form-control form-input-field" id="fullname" value="<?= $user_details['fullname'] ?>" />
                    </div>
                  </div>

                  <div class="col-sm-12 col-md-6">
                    <div class="form-group">
                      <label for="email" class="form-input-label">Email</label>
                      <input type="email" name="email" class="form-control form-input-field" id="email" value="<?= $user_details['email'] ?>" />
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group">
                      <label for="message" class="form-input-label">Message</label>
                      <textarea rows="5" style="resize: vertical;" name="message" class="form-control form-input-field" id="username"></textarea>
                    </div>
                  </div>

                </div>

                <input type="hidden" id="user" value="<?= $_SESSION['user'] ?>" />
                <hr>
                <div class="form-group" id="make_transfer">
                  <div class="input-group">
                    <!-- <input type="text" disabled class="form-control form-control-alt" id="recipent_name" name="example-group3-input2-alt2" placeholder="Receiver"> -->
                    <div class="input-group-append">
                      <button type="submit" id="tbtn" name="send" class="btn btn-alt-success">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="proccessing-pin-modal">
  </div>
  <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php if ($IS_ALLOWED_ALT) : ?>
  <?php require_once 'inc/loader2.php'; ?>
<?php endif; ?>


<?php require_once 'inc/footer.php'; ?>
<script src="js/get_recipent.js"></script>
<script src="js/transfer.js"></script>