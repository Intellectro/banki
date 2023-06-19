<?php
// session_start();
require_once '../admin/inc/functions/config.php';


$query = "SELECT * FROM admins";
$nums = mysqli_num_rows(returnQuery($query));
if (!$nums) redirect_to("signup.php");


if (isset($_POST['submit'])) {
    $response = adminLogin($_POST);

    if ($response === true) {
        redirect_to("index.php");
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


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Sign In | JEKOCFU</title>

    <meta name="description" content="Sign In | JEKOCFU">
    <meta name="author" content="JEKOCFU">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Sign In | JEKOCFU">
    <meta property="og:site_name" content="SAF">
    <meta property="og:description" content="Sign In | JEKOCFU">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://wwww.bekofcu.com.com">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="../admin/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../admin/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../admin/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="../admin/assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="../admin/assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
    <style>
        .form-label {
            display: block !important;
            margin-bottom: .5rem !important;
        }

        .form-input-cus {
            display: flex !important;
            align-items: center !important;
            padding: .8rem 1rem !important;
            min-height: 50px !important;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<body>
    <?php include("./inc/alert.php"); ?>
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('../admin/assets/media/photos/Client1_Ese.jpg.jpg'); background-position: center; background-size: cover">
                <div class="row no-gutters bg-primary-op">
                    <!-- Main Section -->
                    <div class="hero-static col-md-6 d-flex align-items-center bg-white">
                        <div class="p-3 w-100">
                            <!-- Header -->
                            <div class="mb-3 text-center">
                                <a class="link-fx font-w700 font-size-h1" href="index.php">
                                    <span class="text-dark">SAF</span><span class="text-primary">Bank</span>
                                </a>
                                <p class="text-uppercase font-w700 font-size-sm text-muted">Admin Sign In</p>
                            </div>
                            <!-- END Header -->

                            <!-- Sign In Form -->
                            <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <div class="row no-gutters justify-content-center">
                                <div class="col-sm-8 col-xl-6">
                                    <form action="" method="POST">
                                        <div class="py-3">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control form-control-alt form-input-cus" id="email" name="email" />
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="form-label">Password</label>
                                                <input type="password" class="form-control form-control-alt form-input-cus" name="password" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-block btn-hero-lg btn-hero-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                            </button>
                                            <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                        <div class="p-3">
                            <p class="display-4 font-w700 text-white mb-3">
                                Welcome to JEKOCFU
                            </p>
                            <p class="text-white">Building a better life with banking</p>
                            <p class="font-size-lg font-w600 text-white-75 mb-0 mt-10">
                                Copyright &copy; <span data-toggle="year-copy"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="../admin/assets/js/dashmix.core.min.js"></script>

    <!--
            Dashmix JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at ../admin/assets/_js/main/app.js
        -->
    <script src="../admin/assets/js/dashmix.app.min.js"></script>

    <!-- Page JS Plugins -->
    <script src="../admin/assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

    <!-- Page JS Code -->
    <script src="../admin/assets/js/pages/op_auth_signin.min.js"></script>
</body>

</html>