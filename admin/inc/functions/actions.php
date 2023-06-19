<?php
require_once "config.php";

function get_client_ip()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function adminLogin($post)
{
    extract($post);
    $errors = [];

    //Checking for email...
    if (!empty($email)) {
        $tmpEmail = sanitize($email);

        if ($tmpEmail) {
            $mail = $tmpEmail;
        } else {
            $errors[] = "Invalid email address!";
        }
    } else {
        $errors[] = "Please enter your email address!";
    }


    //Checking for password...
    if (!empty($password)) {
        $password = sanitize($password);
    } else {
        $errors[] = "Please enter your password!";
    }


    //The Sql Statement...
    if (!$errors) {
        $sql = "SELECT * FROM admins WHERE email = '$mail'";
        $result = executeQuery($sql);
        if ($result) {
            $encryptedpassword = $result['password'];
            if (decrypt($encryptedpassword, $password)) {
                $_SESSION['admin'] = $result['id'];
                // if (isset($rememberMe)) {
                //     setcookie("admin_password", $password, time() + (86400 * 30), "/");
                //     setcookie("admin_email", $mail, time() + (86400 * 30), "/");
                // }
                return true;
            }
        }
        $errors[] = "Invalid Login Details!";
    }
    return $errors;
}


function AddAdmin($post)
{
    extract($post);
    $errors = [];


    if (!empty($name)) {
        $name = sanitize($name);
    } else {
        $errors[] = "Admin name is empty!"  . "<br>";
    }


    //Checking for email...
    if (!empty($email)) {
        $tmpEmail = sanitize($email);

        if ($tmpEmail) {
            $mail = $tmpEmail;
        } else {
            $errors[] = "Invalid email address!"  . "<br>";
        }
    } else {
        $errors[] = "Admin email address is empty!"  . "<br>";
    }


    //Checking for password...
    if (!empty($password)) {
        $tmp_password = sanitize($password);
        $password = encrypt($tmp_password);
    } else {
        $errors[] = "Enter preferred password!"  . "<br>";
    }

    if (empty($errors)) {
        $sql = "INSERT INTO admins (fullname, email, password) VALUES ('$name', '$mail', '$password')";

        $result = returnQuery($sql);
        if ($result) {
            return true;
        } else {
            $errors[] = "Operation Failed! Try Again" . "<br>";
        }
    } else {
        return $errors;
    }

    return false;
}


function credit_user_account($post)
{
    extract($post);
    $err_flag = false;
    $errors = [];

    if (!empty($account)) {
        $acc_number = sanitize($account);
    } else {
        $errors[] = "Enter account number!";
    }

    if (!empty($amount)) {
        $amount = sanitize($amount);
    } else {
        $err_flag = true;
        $errors[] = "Amount is empty";
    }

    if ($err_flag === false) {
        $ql = "SELECT * FROM users WHERE id = '$id'";

        $qq = returnQuery($ql);

        // TODO: REMEMBER TO ADD THE ACCOUNT_NUM HERE IN TRANSACTION TABLE
        if (mysqli_num_rows($qq) > 0) {
            $user = mysqli_fetch_assoc($qq);
            $account_info = executeQuery("SELECT * FROM accounts WHERE user_id = '$id' AND acc_number = '$account'");

            $account_type = $account_info['acc_type'];
            $amount_in_db = $account_info['acc_balance'];
            $userId = $user['id'];

            $update_balance = $amount + $amount_in_db;

            $sql = "UPDATE accounts SET acc_balance = '$update_balance' WHERE acc_number = '$acc_number' AND user_id = '$id'";
            $result = validateQuery($sql);

            $username = $user['fullname'];
            $date = date("d-M-Y");
            $time = date("H:i:s: A");

            $formated_amount = number_format($amount);
            $formated_bal = number_format($update_balance);

            if ($result) {
                // SEND EMAIL
                $message = "
                <html>
                    <head>
                        <title>Title</title>
                    </head>
                    <body>
                        <div style='background: #1e1e1e; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='./logo.png' width='150' class='rounded' alt='dd'> <br>
                            <h2 style='color: #fff !important'>Dear $username,</h2>
                            <h3 style='color: #fff !important'>Your account was credited!</h3> 
                            <h3 style='margin-top: 2rem; font-color: #fff;'>Transaction Details</h3> 
                
                            <table style='width: 100%; padding-top: 10px;' border='1'>
                                <tr>
                                    <th style='padding: 7px;'>Credit/Debit</th>
                                    <td>Credit</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Account Type</th>
                                    <td>$account_type</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Account number</th>
                                    <td>$account</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Date</th>
                                    <td>$date</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Time</th>
                                    <td>$time</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Amount</th>
                                    <td>USD $formated_amount</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Balance</th>
                                    <td>USD $formated_bal</td>
                                </tr>
                            </table>
                            <p style='color: #fff !important'><i>Jeko Credit Federal Union (JEKOCFU)</i></p>
                        </div>
                    </body>
                </html>
                ";

                sendEmail($user['email'], "Jeko Credit Federal Union (JEKOCFU) Transaction Notification", $message);
                $insertQuery = returnQuery("INSERT INTO `transactions`(`user_id`, `type`, `amount`, `account_num`, `status`, `is_credit`) VALUES ('$id', 0, $amount, '$account', 'approved', 1)");

                if ($insertQuery) {
                    return true;
                } else {
                    $err = "Error! trying again";
                }

                // return true;
            } else {
                $err = "Error! try again";
                return $err;
            }
        }
    } else {
        return $errors;
    }
}

function setPassword($post, $id)
{
    extract($post);
    $err_flag = false;
    $errors = [];

    if (!empty($password)) {
        $tmp_password = sanitize($password);
        $password = encrypt($tmp_password);
    } else {
        $err_flag = true;
        $errors[] = "Type in your new password!";
    }

    if ($err_flag === false) {
        $sql = "UPDATE admins SET password = '$password' WHERE id = $id";
        $query = validateQuery($sql);

        if ($query) {
            return true;
        } else {
            $errors[] = "Error! Please Try Again";
        }
    } else {
        return $errors;
    }
}


function backdate($post, $trans_id)
{
    extract($post);
    $err_flag = false;
    $errors = [];

    if (!empty($date)) {
        $tmp_date = sanitize($date);
        $current_time = date("H:i:s");
        $date = $tmp_date . " " . $current_time;
    } else {
        $err_flag = true;
        $errors[] = "Please put a date!";
    }

    if ($err_flag === false) {
        $sql = "UPDATE transactions SET created_at = '$date' WHERE id = $trans_id";
        $query = validateQuery($sql);

        if ($query) {
            return true;
        } else {
            $errors[] = "Error! Please Try Again";
        }
    } else {
        return $errors;
    }
}

function replyTicket($post, $ticket_id)
{
    extract($post);
    $errors = [];

    if (!empty($reply)) {
        $reply = ALLOW_SAFE_SYMBOLS(sanitize($reply));
    } else {
        $errors[] = "Please add a reply message";
    }

    if (!$errors) {
        $sql = "UPDATE tickets SET reply = '$reply', status = 1, updated_at = now() WHERE ticket_id = $ticket_id";
        $result = validateQuery($sql);

        if ($result) {
            return true;
        } else {
            return "Please try again";
        }
    } else {
        return $errors;
    }
}
