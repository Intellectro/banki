<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';


$USERS = mysqli_fetch_all(returnQuery("SELECT * FROM users"), MYSQLI_ASSOC);
$ACCOUNTS = mysqli_fetch_all(returnQuery("SELECT * FROM accounts"), MYSQLI_ASSOC);


?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">
<?php include("./inc/alert.php"); ?>
	<!-- Page Content -->
	<div class="content">
		<!-- Quick Overview -->
		<h2 class="content-heading">
			<i class="fa fa-angle-right text-muted mr-1"></i> Download History
		</h2>

		<div class="row">

			<div class="col-lg-12 col-xl-12">
				<form action="./handler/download.php" method="post" enctype="multipart/form-data" class="row">
					<div class="col-12">
						<input type="hidden" value='<?= json_encode($ACCOUNTS); ?>' id="accounts" />
						<div class="form-group">
							<label for="user" class="label">User</label>
							<select name="id" onchange="handleFetchUsersAccount(event)" class="form-control" id="user">
								<option value="" selected disabled>Select User</option>
								<?php foreach ($USERS as $user) : ?>
									<option value="<?= $user['id']; ?>">
										<?= $user['fullname']; ?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="col-12">
						<div class="form-group">
							<label for="user-accounts" class="label">User Account</label>
							<select name="account" class="form-control" id="user-accounts">
								<option value="" selected disabled>Select User Account</option>
							</select>
						</div>
					</div>

					<div class="col-12">
						<div class="input-group mt-4">
							<button type="submit" name="download" class="btn btn-alt-success">Download</button>
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