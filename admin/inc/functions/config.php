<?php
@session_start();

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DBNAME", "banki");

// define("HOST", "localhost");
// define("USER", "bekoiyya_root");
// define("PASSWORD", "[^N?@bz=}A[a");
// define("DBNAME", "bekoiyya_bank");


$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

require_once "db.php";
require_once "helpers.php";
require_once "actions.php";
require_once "user_func.php";
