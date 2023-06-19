<?php
require_once 'inc/functions/config.php';
require_once 'inc/header.php';
require_once "../user/inc/banks.php";

$USERS = mysqli_fetch_all(returnQuery("SELECT * FROM users"), MYSQLI_ASSOC);

if (isset($_GET['user'])) {
  $user_id = $_GET['user'];
  $ALLOWEDS = mysqli_fetch_all(returnQuery("SELECT * FROM allowed WHERE user_id = '$user_id'"), MYSQLI_ASSOC);
}

if (isset($_POST['allow-id'])) {
  $id = $_POST['allow-id'];
  if (returnQuery("DELETE FROM allowed WHERE id = $id")) {
    echo "<script>swal(`Config deleted`, '', 'success')</script>";
  } else {
    echo "<script>swal(`Failed to delete`, '', 'error')</script>";
  }
}

?>
<!-- END Header -->

<!-- Main Container -->
<main id="main-container">

  <!-- Page Content -->
  <div class="content">
    <!-- Quick Overview -->
    <div class="row row-deck">
      <div class="col-12">
        <form action="" class="w-100" method="get">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <label for="user" class="label">User</label>
                <select name="user" onchange="handleFetchUsersAccount(event)" class="form-control" id="user">
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
              <div class="mt-3">
                <button type="submit" name="generate" class="btn btn-sm btn-primary">View History</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="">
      <div class="row">
        <?php if (isset($_GET['user'])) : ?>
          <div class="col-12">
            <div class="d-flex justify-content-end">
              <!-- <button class="btn btn-sm btn-primary">Print</button> -->
            </div>
          </div>
          <div class="col-12">
            <div class="table-responsive table-responsive-lg mt-4">
              <table class="table w-100 table-striped w-full">
                <thead>
                  <tr>
                    <td style="font-weight: 600; font-size: .9rem;">User</td>
                    <td style="font-weight: 600; font-size: .9rem; white-space: nowrap; text-overflow: ellipsis;">Allowed Account</td>
                    <td style="font-weight: 600; font-size: .9rem; white-space: nowrap; text-overflow: ellipsis;">Allowed Bank</td>
                    <td style="font-weight: 600; font-size: .9rem;"></td>
                  </tr>
                </thead>

                <tbody>
                  <?php if (count($ALLOWEDS)) : ?>
                    <?php foreach ($ALLOWEDS as $allow) :
                      $user_details = executeQuery("SELECT * FROM users WHERE id = '$user_id'");
                    ?>
                      <tr>
                        <td style="font-size: .9rem; font-weight: 500; white-space: nowrap; text-overflow: ellipsis;"> <?= $user_details['fullname']; ?> </td>
                        <td style="font-size: .9rem; font-weight: 300;"> <?= $allow['account']; ?> </td>
                        <td style="font-size: .9rem; font-weight: 300; white-space: nowrap; text-overflow: ellipsis;"> <?= $allow['bank']; ?> </td>
                        <td style="font-size: .9rem; font-weight: 300;">
                          <form method="post">
                            <button class="btn btn-sm btn-danger" name="allow-id" value="<?= $allow['id']; ?>">delete</button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  <?php else : ?>
                    <tr>
                      <td class="py-4 text-center text-muted" colspan="5">No configs found</td>
                    </tr>
                  <?php endif; ?>
                </tbody>

              </table>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <!-- END Page Content -->
</main>

<script src="./js/get_recipent.js"></script>
<!-- END Main Container -->
<!-- Footer -->
<?php require_once 'inc/footer.php'; ?>