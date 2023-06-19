<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';

?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

    <!-- Page Content -->

    <?php
    $users = fetch("users");
    foreach ($users as $user) {
        extract($user);
        
        $accountDetails = getUsersAccountsDetails($id);
        
        ?>


        <div class="block mt-2 block-rounded">
            <div class="block-content text-center">
                <div class="py-4">
                    <div class="mb-3">
                        <img class="img-avatar img-avatar96" src="assets/media/avatars/avatar15.jpg" alt="">
                    </div>
                    <h1 class="font-size-lg mb-0">
                        <?= $fullname; ?>
                    </h1>
                    <p class="text-muted">
                        <i class="fa fa-award text-warning mr-1"></i>
                        <div class="d-flex align-items-center justify-content-center" style="gap: 1rem;">
                            <?php for ($i = 0; $i < count($accountDetails); $i++): ?>
                                <?php if($i >= (count($accountDetails) - 1)): ?>
                                    <div class="d-block">
                                        <p class="text-muted font-sm">
                                            <?= $accountDetails[$i]['acc_type'] ?>
                                        </p>
                                        <p class="mt-1">
                                            <?= $accountDetails[$i]['acc_number']; ?> 
                                        </p>
                                    </div>
                                <?php  else: ?>
                                    <div class="d-block">
                                        <p class="text-muted font-sm">
                                            <?= $accountDetails[$i]['acc_type'] ?>
                                        </p>
                                        <p class="mt-1">
                                            <?= $accountDetails[$i]['acc_number']; ?> 
                                        </p>
                                    </div>
                                    <span style="height: 25px; width: 1px; background-color: #ccc;"></span>
                                <?php  endif; ?>
                            <?php endfor; ?>
                        </div>
                    </p>
                    
                    <a style="cursor: pointer;" data-id="<?= $id; ?>" onclick="deleteUser(this)" class="bg-danger p-2 shadow rounded text-light">Remove User</a>

                    <?php
                        if ($access == 1) { ?>
                    <span style="cursor: pointer;" data-id="<?= $id; ?>" onclick="blockUser(this)" class="bg-secondary p-2 shadow rounded text-light">Block User</span>

                    <?php } else if ($access == 0) { ?>
                        <span style="cursor: pointer;" data-id="<?= $id; ?>" onclick="unblockUser(this)" class="bg-warning p-2 shadow rounded text-light">Unblock User</span>
                    <?php } ?>
                </div>
            </div>
            <div class="block-content bg-body-dark text-center">
                <div class="text-center items-push text-uppercase">
                    <?php foreach($accountDetails as $account): ?>
                        <div>
                            <div class="font-w600 text-dark mb-1">Total Balance - <?= $account['acc_type']; ?></div>
                            <a class="link-fx font-size-h5" href="javascript:void(0)"><b>$<?= number_format($account['acc_balance']); ?></b></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    <?php } ?>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>
<script src="js/delete_user.js"></script>
<script src="js/block_user.js"></script>