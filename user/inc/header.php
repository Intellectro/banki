<?php
@session_start();
if (!isset($_SESSION['user'])) {
    blockUrlHackers(null, "signin.php");
} else {
    $user_id = $_SESSION['user'];
}

$user_details = getUsersDetails($user_id);
extract($user_details);

$userAccounts = mysqli_fetch_all(returnQuery("SELECT * FROM accounts WHERE user_id = '$user_id'"), MYSQLI_ASSOC);

if ($title == "transfer" && $access == 0) {
    redirect_to("./");
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?= $fullname; ?> Dashboard</title>

    <meta name="description" content="This is user dashboard for Jekocfu Finance customers">
    <meta name="author" content=" Jekocfu Finance">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="User Dashboard">
    <meta property="og:site_name" content=" Jekocfu Finance">
    <meta property="og:description" content="This is user dashboard for Jekocfu Finance customers">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="../logo.png">
    <link rel="icon" type="image/png" sizes="192x192" href="../logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../logo.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="../admin/assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="../admin/assets/css/themes/xwork.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="../admin/assets/css/themes/xwork.min.css">
    <!-- END Stylesheets -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <style>
        .content-side {
            background: #2d6fb7;
        }

        .nav-main-link-name {
            color: #fff;
        }

        .nav-main-link:hover {
            background: #28755f;
        }

        .nav-main-link-icon {
            color: #fff !important;
        }

        .nav-main-submenu .nav-main-link.active,
        .nav-main-submenu .nav-main-link:hover {
            color: #111 !important;
            background-color: #4ccaa6;
            padding-left: 10px;
        }


        /* .nav-main-submenu .nav-main-link {
            background: #31608c;
        } */
        .side-menu {
            background: #fff;
        }

        .nav-main-heading {
            color: #fff;
        }

        .nav-main-link.active,
        .nav-main-link:hover {
            color: #111 !important;
            background-color: #fff;
        }

        .nav-main-link:hover .nav-main-link-name,
        .nav-main-link:hover .nav-main-link-icon,
        .nav-main-link.active .nav-main-link-name,
        .nav-main-link.active .nav-main-link-icon {
            color: #111 !important;
        }


        .form-input-label {
            display: flex;
            font-weight: 500;
            font-size: .85rem;
            margin-bottom: .5rem;
        }

        .form-input-field {
            display: flex;
            flex: 1;
            width: 100%;
            padding: .8rem 1rem;
            font-size: .9rem;
            height: fit-content !important;
            min-height: 40px;
        }


        .nav-main-item.open>.nav-main-submenu>.nav-main-item>.nav-main-link>.nav-main-link-name {
            color: #111 !important;
        }

        /* .nav-main-submenu.open {
            background-color: #aaa !important;
        } */
    </style>
</head>

<body>

    <div id="page-container" class="sidebar-o side-scroll page-header-fixed page-header-dark main-content-boxed">
        <nav id="sidebar" aria-label="Main Navigation">
            <!-- Side Header (mini Sidebar mode) -->
            <div class="smini-visible-block">
                <div class="content-header bg-header-dark">
                    <!-- Logo -->
                    <a class="font-w600 text-white tracking-wide" href="index.php">
                        D<span class="opacity-75">x</span>
                    </a>
                    <!-- END Logo -->
                </div>
            </div>
            <!-- END Side Header (mini Sidebar mode) -->

            <!-- Side Header (normal Sidebar mode) -->
            <div class="smini-hidden">
                <div class="content-header justify-content-lg-center bg-header-dark">
                    <!-- Logo -->
                    <a class="font-w600 text-white tracking-wide" href="index.php">
                        Jekocfu Finance<span class="opacity-75"> Credit...</span>
                    </a>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div class="d-lg-none">
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="text-white ml-2" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
            </div>
            <!-- END Side Header (normal Sidebar mode) -->

            <!-- Sidebar Scrolling -->
            <div class="js-sidebar-scroll">
                <!-- Side Actions -->
                <div class="content-side content-side-full text-center bg-body-light">
                    <div class="smini-hide">
                        <?php if ($profile_pic == null) { ?>
                            <img class="img-avatar" src="../admin/assets/media/avatars/avatar10.jpg" alt="">
                        <?php } else { ?>
                            <!-- <img class="" src="../media/users/<?= $profile_pic; ?>" alt=""> -->
                            <div class="img-avatar" style="background-image: url('../media/users/<?= $profile_pic; ?>'); background-size: cover; background-position: center;"></div>
                        <?php } ?>
                        <div class="mt-3 font-w600"><?= $fullname; ?></div>
                        <?php foreach ($userAccounts as $account) : extract($account); ?>
                            <a class="link-fx text-muted d-block" href="javascript:void(0)"><?= $acc_number; ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
                <!-- END Side Actions -->

                <!-- Side Navigation -->
                <div class="content-side">
                    <ul class="nav-main">
                        <li class="nav-main-item">
                            <a class="nav-main-link <?php if ($title == 'User Dashboard') : echo 'active';
                                                    endif; ?>" href="./">
                                <i class="nav-main-link-icon fa fa-rocket"></i>
                                <span class="nav-main-link-name">Overview</span>
                            </a>
                        </li>

                        <li class="nav-main-heading">Manage</li>

                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu <?php if ($title == 'Account') : echo 'active';
                                                                            endif; ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-piggy-bank"></i>
                                <span class="nav-main-link-name">Accounts</span>
                            </a>
                            <ul class="nav-main-submenu">

                                <!-- <li class="nav-main-item">
                                    <a class="nav-main-link" href="signup.php">
                                        <span class="nav-main-link-name">View activities</span>
                                    </a>
                                </li> -->

                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="e-statement.php">
                                        <span class="nav-main-link-name">eStatement</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu <?php if ($title == 'transactions') : echo 'active';
                                                                            endif; ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-money-check"></i>
                                <span class="nav-main-link-name">Transactions</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="transactions.php">
                                        <span class="nav-main-link-name">Approved</span>
                                        <span class="nav-main-link-badge badge badge-pill badge-success"><?= mysqli_num_rows(returnQuery(" SELECT * FROM transactions WHERE status = 'approved' AND is_credit = 0 AND user_id = '$user_id'")); ?></span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="pending.php">
                                        <span class="nav-main-link-name">Pending</span>
                                        <span class="nav-main-link-badge badge badge-pill badge-warning"><?= mysqli_num_rows(returnQuery(" SELECT * FROM transactions WHERE status = 'pending' AND is_credit = 0 AND user_id = '$user_id'")); ?></span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu <?php if ($title == 'transfer') : echo 'active';
                                                                            endif; ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-money-bill-wave-alt"></i>
                                <span class="nav-main-link-name">Payments&nbsp;&&nbsp;Transfer</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <!-- <li class="nav-main-item">
                                    <a class="nav-main-link" href="transfer.php">
                                        <span class="nav-main-link-name">Direct Deposit</span>
                                    </a>
                                </li> -->
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="ach-transfer.php">
                                        <span class="nav-main-link-name">ACH Transfer</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="wire.php">
                                        <span class="nav-main-link-name">Wire Transfer</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link <?php if ($title == 'Mobile Deposit') : echo 'active';
                                                    endif; ?>" href="./mobile-deposit.php">
                                <i class="nav-main-link-icon fa fa-mobile"></i>
                                <span class="nav-main-link-name">Mobile Deposit</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link <?php if ($title == 'Ticket') : echo 'active';
                                                    endif; ?>" href="./ticket.php">
                                <i class="nav-main-link-icon fa fa-mobile"></i>
                                <span class="nav-main-link-name">Send Ticket</span>
                            </a>
                        </li>

                        <!-- <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu <?php if ($title == 'Manage Cards') : echo 'active';
                                                                            endif; ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-credit-card"></i>
                                <span class="nav-main-link-name">Manage Cards</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="manage-card.php?page=block">
                                        <span class="nav-main-link-name">Block lost/stolen card</span>
                                    </a>
                                </li>

                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="manage-card.php?page=new">
                                        <span class="nav-main-link-name">Request a new card</span>
                                    </a>
                                </li>

                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="manage-card.php?page=active">
                                        <span class="nav-main-link-name">Unlock active card</span>
                                    </a>
                                </li>
                            </ul>
                        </li> -->


                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu <?php if ($title == 'Zelle') : echo 'active';
                                                                            endif; ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <img src="./img/zelle.png" style="width: 24px; height: 18px; margin-right: 6px; object-fit: contain;" alt="zelle">
                                <span class="nav-main-link-name">Zelle</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="zelle.php?page=phone">
                                        <span class="nav-main-link-name">Phone</span>
                                    </a>
                                </li>

                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="zelle.php?page=email">
                                        <span class="nav-main-link-name">Email</span>
                                    </a>
                                </li>

                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="zelle.php?page=account">
                                        <span class="nav-main-link-name">Account</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu <?php if ($title == 'bill') : echo 'active';
                                                                            endif; ?>" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-building"></i>
                                <span class="nav-main-link-name">Services</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=electricity">
                                        <span class="nav-main-link-name">Electricity</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=gas">
                                        <span class="nav-main-link-name">Gas</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=water">
                                        <span class="nav-main-link-name">Water</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=trash">
                                        <span class="nav-main-link-name">Trash</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=sewer">
                                        <span class="nav-main-link-name">Sewer</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=telephone">
                                        <span class="nav-main-link-name">Telephone</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=home">
                                        <span class="nav-main-link-name">Home Insurance</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=health">
                                        <span class="nav-main-link-name">Health Insurance</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=education">
                                        <span class="nav-main-link-name">Education</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=child">
                                        <span class="nav-main-link-name">Child Care</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="bill.php?bill=rent">
                                        <span class="nav-main-link-name">Rent/Mortage</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-heading">Personal</li>

                        <li class="nav-main-item">
                            <a class="nav-main-link <?php if ($title == 'profile') : echo 'active';
                                                    endif; ?>" href="edit-profile.php">
                                <i class="nav-main-link-icon fa fa-user-circle"></i>
                                <span class="nav-main-link-name">Profile</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link <?php if ($title == 'Settings') : echo 'active';
                                                    endif; ?>" href="./settings.php">
                                <i class="nav-main-link-icon fa fa-cog"></i>
                                <span class="nav-main-link-name">Settings</span>
                            </a>
                        </li>

                        <li class="nav-main-item">
                            <a class="nav-main-link <?php if ($title == 'Help Center') : echo 'active';
                                                    endif; ?>" href="./help-center.php">
                                <i class="nav-main-link-icon fa fa-cog"></i>
                                <span class="nav-main-link-name">Help Center</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Side Navigation -->
            </div>
            <!-- END Sidebar Scrolling -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div>
                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                    <button type="button" class="btn btn-dual" data-toggle="layout" data-action="sidebar_toggle">
                        <i class="fa fa-fw fa-stream fa-flip-horizontal"></i>
                    </button>
                    <!-- END Toggle Sidebar -->

                    <!-- Open Search Section -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <!-- <button type="button" class="btn btn-dual" data-toggle="layout" data-action="header_search_on">
                        <i class="fa fa-fw fa-search"></i> <span class="ml-1 d-none d-sm-inline-block">Search..</span>
                    </button> -->
                    <!-- END Open Search Section -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div>
                    <!-- Notifications Dropdown -->
                    <div class="dropdown d-inline-block">
                    </div>
                    <!-- END Notifications Dropdown -->

                    <!-- User Dropdown -->
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-fw fa-user-circle"></i>
                            <i class="fa fa-fw fa-angle-down ml-1 d-none d-sm-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right p-0" aria-labelledby="page-header-user-dropdown">
                            <div class="bg-primary-darker rounded-top font-w600 text-white text-center p-3">
                                <?php if ($profile_pic == null) { ?>
                                    <img class="img-avatar" src="../admin/assets/media/avatars/avatar10.jpg" alt="">
                                <?php } else { ?>
                                    <!-- <img class="" src="../media/users/<?= $profile_pic; ?>" alt=""> -->
                                    <div class="img-avatar" style="background-image: url('../media/users/<?= $profile_pic; ?>'); background-size: cover; background-position: center;"></div>
                                <?php } ?>
                                <div class="pt-2">
                                    <a class="text-white font-w600" href="edit-profile.php"><?= $fullname; ?></a>
                                </div>
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item" href="javascript:void(0)">
                                    <!-- <i class="fa fa-fw fa-cog mr-1"></i> Settings -->
                                </a>
                                <div role="separator" class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="fa fa-fw fa-arrow-alt-circle-left mr-1"></i> Log Out
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END User Dropdown -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-primary">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-primary" data-toggle="layout" data-action="header_search_off">
                                    <i class="fa fa-fw fa-times-circle"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control border-0" placeholder="Search.." id="page-header-search-input" name="page-header-search-input">
                        </div>
                    </form>
                </div>
            </div>

            <input type="hidden" value="<?= $fullname; ?>" id="name-box">
            <!-- END Header Search -->

            <!-- Header Loader -->
            <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
            <div id="page-header-loader" class="overlay-header bg-primary-dark">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <script src="./js/ip.js"></script>
        <?php // if(isset($_SESSION['SEND__MAIL'])): 
        ?>
        <script>
            getIp(document.querySelector("#name-box").value)
        </script>
        <?php // unset($_SESSION['SEND__MAIL']);  endif; 
        ?>