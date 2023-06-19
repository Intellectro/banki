<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Sign Up | JEKOCFU</title>

    <meta name="description" content="Sign Up | JEKOCFU">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Sign Up | JEKOCFU">
    <meta property="og:site_name" content="SAF">
    <meta property="og:description" content="Sign Up | JEKOCFU">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
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

    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">

            <!-- Page Content -->
            <div class="bg-image" style="background-image: url('../admin/assets/media/photos/photo12@2x.jpg');">
                <div class="row no-gutters justify-content-center bg-black-75">
                    <!-- Main Section -->
                    <div class="hero-static col-md-6 d-flex align-items-center bg-white">
                        <div class="p-3 w-100">
                            <!-- Header -->
                            <div class="mb-3 text-center">
                                <a class="link-fx text-success font-w700 font-size-h1" href="index.php">
                                    <span class="text-dark">BCA</span><span class="text-success">Mellon</span>
                                </a>
                                <p class="text-uppercase font-w700 font-size-sm text-muted">Create New Account</p>
                            </div>
                            <!-- END Header -->

                            <!-- Sign Up Form -->
                            <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                            <div class="row no-gutters justify-content-center">
                                <div class="col-sm-8 col-xl-6">
                                    <form action="" method="POST">
                                        <div class="py-3">
                                            <div class="form-group">
                                                <label for="name" class="form-label">Username</label>
                                                <input type="text" id="name" class="form-control form-control form-control-alt form-input-cus" name="name" />
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" id="email" class="form-control form-control form-control-alt form-input-cus" name="email" />
                                            </div>
                                            <div class="form-group">
                                                <label for="password" class="form-label">Password</label>
                                                <input type="password" id="password" class="form-control form-control-lg form-control-alt form-input-cus" name="password" />
                                            </div>
                                            <div class="form-group">
                                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                                <input type="password" id="confirm-password" class="form-control form-control-lg form-control-alt form-input-cus" name="confirm_pwd" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox custom-control-primary">
                                                    <input type="checkbox" class="custom-control-input" id="signup-terms" name="terms">
                                                    <label class="custom-control-label" for="signup-terms">I agree to Terms &amp; Conditions</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" class="btn btn-block btn-hero-lg btn-hero-success">
                                                <i class="fa fa-fw fa-plus mr-1"></i> Create Account
                                            </button>
                                            <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                                <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="signin.php">
                                                    <i class="fa fa-sign-in-alt text-muted mr-1"></i> Sign In
                                                </a>
                                                <!-- <a class="btn btn-sm btn-light d-block d-lg-inline-block mb-1" href="" data-toggle="modal" data-target="#modal-terms">
                                                    <i class="fa fa-book text-muted mr-1"></i> Read Terms
                                                </a> -->
                                            </p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Sign Up Form -->
                        </div>
                    </div>
                    <!-- END Main Section -->
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <!-- Terms Modal -->
    <div class="modal fade" id="modal-terms" tabindex="-1" role="dialog" aria-labelledby="modal-terms" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="block block-themed block-transparent mb-0">
                    <div class="block-header bg-primary-dark">
                        <h3 class="block-title">Terms &amp; Conditions</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    </div>
                    <div class="block-content block-content-full text-right bg-light">
                        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->

    <?php
    require_once '../admin/inc/functions/config.php';

    // $query = "SELECT * FROM admins";
    // $nums = mysqli_num_rows(returnQuery($query));
    // if ($nums) redirect_to("signin.php");

    function handleReg($data)
    {
        extract($data);
        if ($confirm_pwd != $password) {
            echo "<script>swal('Passwords do not match', '', 'error')</script>";
            return;
        }
        $password = encrypt($password);
        $sql = "INSERT INTO admins (fullname, email, password) VALUES ('$name', '$email', '$password')";
        $response = returnQuery($sql);
        if ($response) {
            echo "<script>swal('entered', '', 'success')</script>";
            redirect_to("./signin.php");
        } else {
            echo "<script>swal('error', '', 'error')</script>";
        }
    }


    if (isset($_POST['submit'])) {
        handleReg($_POST);
    }


    ?>


    <!--
            Dashmix JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out ../admin/assets/_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the ../admin/assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            ../admin/assets/js/core/jquery.min.js
            ../admin/assets/js/core/bootstrap.bundle.min.js
            ../admin/assets/js/core/simplebar.min.js
            ../admin/assets/js/core/jquery-scrollLock.min.js
            ../admin/assets/js/core/jquery.appear.min.js
            ../admin/assets/js/core/js.cookie.min.js
        -->
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
    <script src="../admin/assets/js/pages/op_auth_signup.min.js"></script>
</body>

</html>