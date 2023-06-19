<?php
require_once '../admin/inc/functions/config.php';
$title = "profile";
require_once 'inc/header.php';
?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">
    <?php include("./inc/alert.php"); ?>
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('../admin/assets/media/photos/photo17@2x.jpg');">
        <div class="bg-black-75">
            <div class="content content-full">
                <div class="py-5 text-center">
                    <a class="img-link" href="./">
                        <?php if ($profile_pic == null) { ?>
                            <img class="img-avatar img-avatar96 img-avatar-thumb" src="../admin/assets/media/avatars/avatar10.jpg" alt="">
                        <?php } else { ?>

                            <div class="img-avatar img-avatar96 img-avatar-thumb" style="background-image: url('../media/users/<?= $profile_pic; ?>'); background-size: cover; background-position: center;"></div>
                        <?php } ?>
                    </a>
                    <h1 class="font-w700 my-2 text-white"><?= $fullname; ?></h1>
                    <h2 class="h4 font-w700 text-white-75">
                        Jeko Credit Federal Union (JEKOCFU)
                    </h2>
                    <a class="btn btn-hero-dark" href="./">
                        <i class="fa fa-fw fa-arrow-left"></i> Back to Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <h2 class="content-heading">
            <i class="fa fa-user text-muted mr-1"></i> Set Account
        </h2>

        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <form action="./handler/edit-handler.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Set profile image</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-user"></i>
                                </span>
                            </div>
                            <input type="file" name="img" accept="image/*" class="form-control" id="img" placeholder="Enter Image">
                        </div>
                    </div>

                    <hr>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-append">
                                <button type="submit" id="tbtn" name="submit" class="btn btn-alt-success rounded shadow">Add profile</button>
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