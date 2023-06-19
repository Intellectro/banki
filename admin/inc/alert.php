<?php

if (isset($_SESSION['A_ALERT'])) {
  $alert = json_decode($_SESSION['A_ALERT'], true);
?>
  <script>
    swal(`<?= $alert['message'] ?>`, ``, `<?= $alert['type'] ?>`);
  </script>
<?php
unset($_SESSION['A_ALERT']);
}
