<?php
require_once "config.php";
// require("../../../SET_UP.php");
// Prev. #452121


// $APP_LINK = $APP['APP_LINK'];


function user_register($post)
{
    global $link;
    extract($_POST);

    $errors = [];

    if (!empty($fullname)) {
        $fullname = sanitize($fullname);
    } else {
        $errors[] = "Enter fullname!";
    }

    if (!empty($username)) {
        $username = sanitize($username);
    } else {
        $errors[] = "Enter username!";
    }

    if (!empty($phone)) {
        $phone = sanitize($phone);
    } else {
        $errors[] = "Enter phone number!";
    }

    if (!empty($email)) {
        $email = sanitize($email);
    } else {
        $errors[] = "Enter email!";
    }

    if (!empty($address)) {
        $address = sanitize($address);
    } else {
        $errors[] = "Enter address!";
    }

    if (!empty($dob)) {
        $dob = sanitize($dob);
    } else {
        $errors[] = "Enter date of birth!";
    }

    if (!empty($acc_type)) {
        $acc_type = sanitize($acc_type);
    } else {
        $errors[] = "Enter account type!";
    }

    if (!empty($password)) {
        $tmp_password = sanitize($password);
    } else {
        $errors[] = "Enter password!";
    }

    if (!empty($ssn)) {
        $ssn = sanitize($ssn);
    } else {
        $errors[] = "Enter SSN!";
    }

    if (!empty($confirm_pwd)) {
        $confirm_pwd = sanitize($confirm_pwd);
    } else {
        $errors[] = "Confirm password!";
    }

    if (!isset($terms)) {
        $errors[] = "Please agree to terms and conditions!";
    }

    if ($tmp_password === $confirm_pwd) {
        $password = encrypt($tmp_password);
    } else {
        $errors[] = "Passwords do not match!";
    }


    if (!$errors || empty($errors)) {
        $userId = generateID("usr_", 9);
        $now = date("Y-m-d H:i:s");
        $access = 1;

        // Add new user
        $sql = "INSERT INTO `users`(`id`, `fullname`, `email`, `username`, `phone`, `ssn`, `address`, `dob`, `password`, `access`, `created_at`, `updated_at`) VALUES ('$userId', '$fullname', '$email', '$username', '$phone', '$ssn', '$address', '$dob', '$password', '$access', '$now', '$now')";
        $result = mysqli_query($link, $sql);
        // mysqli_stmt_bind_param($stmt, 'ssssssssdss',);

        if ($result === true) {
            // GENERATE ACCOUNTS
            $accounts = [
                [
                    "accountNumber" => generateNumber(10),
                    "accountPin" => generateNumber(5),
                    "accountCot" => generateNumber(4),
                    "accountImf" => generateNumber(4),
                    "accountType" => $acc_type
                ],
                [
                    "accountNumber" => generateNumber(10),
                    "accountPin" => generateNumber(5),
                    "accountCot" => generateNumber(4),
                    "accountImf" => generateNumber(4),
                    "accountType" => "Business Savings Account"
                ]
            ];

            $success = [];
            // Add the second account
            foreach ($accounts as $account) {
                try {

                    $accountPin = $account['accountPin'];
                    $accountNumber = $account['accountNumber'];
                    $accountType = $account['accountType'];
                    $accountCot = $account['accountCot'];
                    $accountImf = $account['accountImf'];
                    $query = "INSERT INTO `accounts`(`acc_number`, `user_id`, `acc_type`, `acc_pin`, `cot`, `imf`, `created_at`) VALUES ('$accountNumber', '$userId', '$accountType', '$accountPin', '$accountCot', '$accountImf', '$now')";
                    $queryStmt = mysqli_query($link, $query);
                    if (!$queryStmt) {
                        array_push($success, "false");
                    } else {
                        array_push($success, "true");
                    }
                } catch (Exception $e) {
                    print_r($e);
                    die();
                }
            }

            $notSuccessful = array_filter($success, function ($item) {
                return $item !== "true";
            });

            print_r($success);
            print_r($notSuccessful);

            die();

            if ($notSuccessful) {
                $errors[] = "Error creating account";
                return $errors;
            }

            foreach ($accounts as $account) {
                extract($account);

                $message = "
                    <html>
                        <head>
                            <title>Title</title>
                        </head>
                        <body>
                            <div style='background: #1e1e1e; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='./logo.png' width='150' class='rounded' alt='dd'> <br>
                    
                                <h2 style='color: #fff !important'>Hello,</h2>
                                <h3 style='color: #fff !important'>Welcome to bekofcu.com. The bank that serves all customers equally on a daily basis</h3> 
                                <i>Your details are as follows:</i> <hr>
                                
                    
                                <table style='width: 100%; padding-top: 10px;' border='1'>
                                    <tr>
                                        <th style='padding: 7px;'>Account number</th>
                                        <td>$accountNumber</td>
                                    </tr>
                                    <tr>
                                        <th style='padding: 7px;'>Account Pin</th>
                                        <td>$accountPin</td>
                                    </tr>
                                    <tr>
                                        <th style='padding: 7px;'>Account COT</th>
                                        <td>$accountCot</td>
                                    </tr>
                                    <tr>
                                        <th style='padding: 7px;'>Account IMF</th>
                                        <td>$accountImf</td>
                                    </tr>
                                    <tr>
                                        <th style='padding: 7px;'>Account Type</th>
                                        <td>$accountType</td>
                                    </tr>
                                </table>
                                <p style='color: #fff !important'><i>Thank you for choosingJeko Credit Federal Union (JEKOCFU)</i></p>
                            </div>
                        </body>
                    </html>
                ";
                sendEmail($email, "Welcome to Jeko Credit Federal Union (JEKOCFU)", $message);
            }
            return true;
        } else {
            $errors[] = "Check form inputs";
        }
    } else {
        return $errors;
    }
} // end of user registration

// User Login
function user_login($post)
{
    global $link;
    extract($post);
    $errors = [];

    //Checking for email...
    if (!empty($accNum)) {
        $accNum = sanitize($accNum);
    } else {
        $errors[] = "Please enter your account number!";
    }


    //Checking for password...
    if (!empty($password)) {
        $password = sanitize($password);
    } else {
        $errors[] = "Please enter your password!";
    }


    //The Sql Statement...
    if (!$errors) {
        $sql = "SELECT * FROM accounts WHERE acc_number = '$accNum'";
        $result = executeQuery($sql);

        if ($result) {
            // Get users details
            $userId = $result['user_id'];
            $query = "SELECT * FROM users WHERE id = '$userId'";
            $resultQuery = executeQuery($query);

            if (!$resultQuery) {
                $errors[] = "No user found";
                return $errors;
            }

            $encryptedpassword = $resultQuery['password'];
            $userEmail = $resultQuery['email'];
            $userName = $resultQuery['fullname'];

            $otp = generateNumber(4);

            // $message = "
            //     <html>
            //     <head>
            //         <title>Login</title>
            //     </head>
            //     <body>
            //         <center>
            //         <div style='background: #1e1e1e; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;'>
            //         <img src='./logo.png' width='150' style='border-radius: 0.25rem!important' alt='Jeko Credit Federal Union (JEKOCFU)'> <br>

            //             <h2 style='color: #fff !important'>Dear $userName,</h2>
            //             <h3 style='color: #fff !important'>This is your ONE-TIME-PASSWORD</h3> <hr>

            //             <h1 style='font-size: 55px; color: #fff !important'>$otp</h1>

            //             <p style='color: #fff !important'>
            //                 <i>Use this Passcode to complete your Login.</i> <br>
            //                 <i>Jeko Credit Federal Union (JEKOCFU)</i>
            //             </p>
            //     </div>
            //         </center>
            //     </body>
            //     </html>
            //     ";
            if (password_verify($password, $encryptedpassword)) {
                //TODO: REMEMBER TO CHANGE THE USER ID COLUMN TO STRING

                $_SESSION['tmpData'] = $userId;
                $_SESSION['acc_number'] = $accNum;

                // if (sendEmail($userEmail, "Login Verification", $message)) {

                // $otpSql = "INSERT INTO passcodes (otp, user_id, account) VALUES (?, ?, ?)";
                $otpSql = "INSERT INTO passcodes (otp, user_id, account) VALUES ('$otp', '$userId', '$accNum')";

                $result = mysqli_query($link, $otpSql);

                if ($result) {
                    $_SESSION["SEND__MAIL"] = "SEND";
                    return true;
                } else {
                    die("Couldn't send");
                }
                // }
            }
        }
        $errors[] = "Invalid Login Details!";
        return $errors;
    }
}

function verifyLogin($post)
{
    extract($post);
    $errors = [];
    $user_id = $_SESSION['tmpData'];
    $accountNumber = $_SESSION['acc_number'];

    if (!empty($otp)) {
        $otp = sanitize($otp);
    } else {
        $errors[] = "Please enter OTP";
    }

    if (!$errors) {
        $sql = "SELECT * FROM passcodes WHERE otp = $otp AND user_id = '$user_id' AND account = '$accountNumber' AND status = 'null'";
        $result = executeQuery($sql);

        if ($result) {
            $updateSql = "UPDATE passcodes SET status = 'used' WHERE otp = '$otp' AND account = '$accountNumber' AND user_id = '$user_id'";
            $updateQuery = validateQuery($updateSql);

            if ($updateQuery) {
                return true;
            }
        } else {
            return "Invaild OTP provided";
        }
    } else {
        return $errors;
    }
}

function confirmPin($post)
{
    extract($post);
    $errors = [];
    $user_id = $_SESSION['tmpData'];
    unset($_SESSION['acc_number']);

    if (!empty($pin)) {
        $pin = sanitize($pin);
    } else {
        $errors[] = "Please provide account pin";
    }

    if (!$errors) {
        $sql = "SELECT * FROM accounts WHERE acc_pin = '$pin' AND user_id = '$user_id'";
        $result = executeQuery($sql);

        $user = executeQuery("SELECT * FROM users WHERE id = '$user_id'");
        $email = $user['email'];

        if ($result) {
            $_SESSION['user'] = $user_id;
            $message = "
                <html>
                <head>
                    <title>Message</title>
                </head>
                <body>
                   
                        <div style='background: #1e1e1e; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='./logo.png' width='150' class='rounded' alt='dd'> <br>
                            
                            
                            <h2 style='color: #fff !important'>Hello,</h2>
                            <h3 style='color: #fff !important'>You just logged in to your account!</h3> 
                            <p><i>Didn't initiate this?</i></p> <hr>
                
                            <a style='background: blue; color: #fff !important; padding: 7px; text-decoration: none;' href='bekofcu.com/user/logout'>Logout User</a>
                
                            <p class='text-center mt-2'><i>Jeko Credit Federal Union (JEKOCFU)</i></p>
                        </div>
                
                </body>
                </html>
                ";
            sendEmail($email, "Jeko Credit Federal Union (JEKOCFU) Login Notification", $message);
            return true;
        } else {
            return "Invaild pin provided";
        }
    } else {
        return $errors;
    }
}

function cardLogin($post)
{
    extract($post);
    $errors = [];

    if (!empty($username)) {
        $username = sanitize($username);
    } else {
        $errors[] = "Username is empty";
    }

    if (!empty($pin)) {
        $pin = sanitize($pin);
    } else {
        $errors[] = "Pin is empty";
    }

    if (isset($_SESSION['studentId'])) {
        $student_id = $_SESSION['studentId'];
    }

    if (!$errors) {
        $sql = "SELECT * FROM students WHERE id = $student_id";
        $row = executeQuery($sql);

        if ($username === $row['username']) {
            $sql2 = "SELECT * FROM student_cards WHERE card_pin = '$pin'";
            $row2 = executeQuery($sql2);

            if ($row2) {
                $stusentIdFromDb = $row2['student_id_fk'];
                $validStatus = $row2['valid'];

                // echo "<pre>";
                // print_r($row2);
                // echo "<br>student-id: $student_id";
                // echo "<br>valid status: $validStatus";

                // die();

                if ($stusentIdFromDb == $student_id && $validStatus == 1) {
                    $_SESSION['cardSet'] = $row2['card_pin'];
                    return true;
                } else {

                    if (empty($validStatus)) {
                        $changeToInvalid = "UPDATE student_cards SET student_id_fk = '$student_id', valid = '1' WHERE card_pin = '$pin'";
                        $invalidQuery = validateQuery($changeToInvalid);

                        if ($invalidQuery) {
                            $_SESSION['cardSet'] = $row2['card_pin'];
                            return true;
                        } else {
                            $invalid = "Invalid card details";
                            return $invalid;
                        }
                    } else {
                        $invalid = "This card does not belong to you! Please check for your card";
                        return $invalid;
                    }
                }
            } else {
                $invalid = "Invalid card details";
                return $invalid;
            }
        } else {
            $invalid = "Invalid card details";
            return $invalid;
        }
    } else {
        return $errors;
    }
}

function updateStudentProfile($post)
{
    extract($post);
    $errors = [];

    $studentId = $id;

    if (!empty($fullname)) {
        $fullname = sanitize($fullname);
    } else {
        $errors[] = "Name cannot be empty!";
    }

    if (!empty($oldpassword)) {
        $oldpassword = sanitize($oldpassword);

        $sql = "SELECT * FROM students WHERE id = $studentId";
        $gettingDetails = executeQuery($sql);
        if (!empty($gettingDetails)) {
            $db_pwd = $gettingDetails['password'];
            $check_pwd = decrypt($db_pwd, $oldpassword);
            if ($check_pwd === true) {
                if (!empty($newpassword)) {
                    $new_pwd_tmp = sanitize($newpassword);
                    $new_pwd = encrypt($new_pwd_tmp);

                    $update_pwd = "UPDATE students SET password = '$new_pwd' WHERE id = $studentId";
                    $update_pwd_query = validateQuery($update_pwd);
                }
            } else {
                $errors[] = "Incorrect Password";
            }
        }
    }

    if (isset($_FILES['pics'])) {
        $pics = sanitize($_FILES['pics']['name']);
        $tmp_pics = $_FILES['pics']['tmp_name'];
        move_uploaded_file($tmp_pics, "../assets/images/students/$pics");
    } else {
        $errors[] = "Profile Image is empty" . "<br>";
    }

    if (!$errors) {
        $update_profile = "UPDATE students SET name = '$fullname', image = '$pics' WHERE id = $studentId";
        $profile_query = validateQuery($update_profile);

        if ($profile_query) {
            return true;
        } else {
            return false;
        }
    } else {
        return $errors;
    }
}

function make_transfer($post, $user_id)
{
    extract($post);
    $errors = [];
    $err_flag = false;

    if (!empty($sender_account)) {
        $sender_account = sanitize($sender_account);
    } else {
        $err_flag = true;
        $errors[] = "Choose account you want to send from!";
    }

    if (!empty($recipent)) {
        $acc_number = sanitize($recipent);
    } else {
        $err_flag = true;
        $errors[] = "Enter account number!";
    }

    if (!empty($routing_number)) {
        $routing_number = sanitize($routing_number);
    } else {
        $err_flag = true;
        $errors[] = "Enter routing number!";
    }

    if (!empty($amount)) {
        $amount = sanitize($amount);
    } else {
        $err_flag = true;
        $errors[] = "Enter account number!";
    }

    if (!empty($desc)) {
        $desc = ALLOW_SAFE_SYMBOLS(sanitize($desc));
    } else {
        $err_flag = true;
        $errors[] = "Enter transaction description!";
    }

    if ($err_flag === false) {
        $sql1 = "SELECT * FROM accounts WHERE user_id = '$user_id' AND acc_number = '$sender_account'";
        $query1 = executeQuery($sql1);

        $sql2 = "SELECT * FROM users WHERE id = '$user_id'";
        $query2 = executeQuery($sql2);

        $rec_sql = "SELECT * FROM accounts WHERE acc_number = '$acc_number'";
        $rec_result = executeQuery($rec_sql);
        $receipent_id = $rec_result['user_id'];

        $recipent_details = executeQuery("SELECT * FROM users WHERE id = '$receipent_id'");

        if ($query1) {
            $details = $query2;
            $total_balance = $query1['acc_balance'];
            $email = $details['email'];
            $available_balance = $total_balance - $amount;
            $date = date("Y/m/d");
            $time = date("h:i:sa");
            $username = $details['fullname'];

            //Receiver details
            $receiver_email = $rec_result['email'];
            $receiver_fullname = $recipent_details['fullname'];

            if ($amount <= $total_balance) {
                $sql2 = "INSERT INTO transactions (user_id, type, account_num, amount, to_user, description, routing_number, created_at, kind) VALUES ($user_id, 1, '$sender_account', $amount, '$acc_number', '$desc', '$routing_number', now(), 'transfer')";
                $query2 = validateQuery($sql2);

                if ($query2) {
                    $message = "
                <html>
                <head>
                    <title>Title</title>
                </head>
                <body>
                        <div style='background: #1e1e1e; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='./logo.png' width='150' class='rounded' alt='dd'> <br>
                
                            <h2 style='color: #fff !important'>Dear $username,</h2>
                            <h3 style='color: #fff !important'>Your transaction was successful!</h3> 
                            <i>Transaction Alert</i> <hr>
                
                            <table style='width: 100%; padding-top: 10px;' border='1'>
                                <tr>
                                    <th style='padding: 7px;'>Credit/Debit</th>
                                    <td>Debit</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Account number</th>
                                    <td>$acc_number</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Date/Time</th>
                                    <td>$date - $time</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Description</th>
                                    <td>$desc</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Amount</th>
                                    <td>USD $amount</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Balance</th>
                                    <td>USD $total_balance</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Avalaible Balance</th>
                                    <td>USD $available_balance</td>
                                </tr>
                            </table>
                            <p style='color: #fff !important'><i>Jeko Credit Federal Union (JEKOCFU)</i></p>
                        </div>
                
                   
                </body>
                </html>
                ";

                    $rec_message = "
                <html>
                <head>
                    <title>Title</title>
                </head>
                <body>
                        <div style='background: #1e1e1e; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='./logo.png' width='150' class='rounded' alt='dd'> <br>
                
                            <h2 style='color: #fff !important'>Dear $receiver_fullname,</h2>
                            <h3 style='color: #fff !important'>You were credited!</h3>  <hr>
                
                            <table style='width: 100%; padding-top: 10px;' border='1'>
                                <tr>
                                    <th style='padding: 7px;'>Credit/Debit</th>
                                    <td>Credit</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>From</th>
                                    <td>$username</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Date/Time</th>
                                    <td>$date - $time</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Description</th>
                                    <td>$desc</td>
                                </tr>
                                <tr>
                                    <th style='padding: 7px;'>Amount</th>
                                    <td>USD $amount</td>
                                </tr>
                            </table>
                            <p style='color: #fff !important'><i>Jeko Credit Federal Union (JEKOCFU)</i></p>
                        </div>
                
                   
                </body>
                </html>
                ";
                    sendEmail($email, "Jeko Credit Federal Union (JEKOCFU) Alert", $message);
                    sendEmail($receiver_email, "Jeko Credit Federal Union (JEKOCFU) Alert", $rec_message);
                    return true;
                }
            } else {
                $message = "
                <html>
                <head>
                    <title>Title</title>
                </head>
                <body>
                   
                        <div style='background: #1e1e1e; padding: 1rem; color: #fff !important; border-radius: 0.25rem!important; width: 500px; text-align: center!important; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important; font-family: sans-serif;'>
                            <img src='./logo.png' width='150' class='rounded' alt='dd'> <br>
                
                            <h2 style='color: #fff !important'>Dear $userName,</h2>
                            <h3 style='color: #fff !important'>Your transaction failed</h3> 
                            <i>Transaction Alert</i> <hr>
                
                            <table style='width: 100%; padding-top: 10px;' border='1'>
                            <tr>
                            <th style='padding: 7px;'>Account number</th>
                            <td>$acc_number</td>
                            </tr>
                            <tr>
                                <th style='padding: 7px;'>Date/Time</th>
                                <td>$date - $time</td>
                            </tr>
                            <tr>
                                <th style='padding: 7px;'>Amount</th>
                                <td>USD $amount</td>
                            </tr>
                            </table>
                            <p style='color: #fff !important'><i>Jeko Credit Federal Union (JEKOCFU)</i></p>
                        </div>
                
                   
                </body>
                </html>
                ";
                sendEmail($email, "Jeko Credit Federal Union (JEKOCFU) Notification", $message);
                $balance_err = "Insufficient Balance";
                return $balance_err;
            }
        } else {
            $err_user = "Error from getting users";
            return $err_user;
        }
    } else {
        return $errors;
    }
}

function wire_transfer($post, $user_id)
{
    extract($post);
    $errors = [];
    $err_flag = false;

    if (!empty($recipent)) {
        $acc_number = sanitize($recipent);
    } else {
        $err_flag = true;
        $errors[] = "Enter account number!";
    }

    if (!empty($acc_name)) {
        $acc_name = sanitize($acc_name);
    } else {
        $err_flag = true;
        $errors[] = "Enter account name!";
    }

    if (!empty($bank_name)) {
        $bank_name = sanitize($bank_name);
    } else {
        $err_flag = true;
        $errors[] = "Enter bank name!";
    }

    if (!empty($swift_code)) {
        $swift_code = sanitize($swift_code);
    } else {
        $err_flag = true;
        $errors[] = "Enter swift code!";
    }

    if (!empty($sender_account)) {
        $sender_account = sanitize($sender_account);
    } else {
        $err_flag = true;
        $errors[] = "Choose account you want to send from!";
    }

    if (!empty($amount)) {
        $amount = sanitize($amount);
    } else {
        $err_flag = true;
        $errors[] = "Enter account number!";
    }

    if (!empty($desc)) {
        $desc = ALLOW_SAFE_SYMBOLS(sanitize($desc));
    } else {
        $err_flag = true;
        $errors[] = "Enter description!";
    }


    if ($err_flag === false) {
        // echo ($user_id);
        // echo ($sender_account);
        // die();

        $accountDetails = executeQuery("SELECT * FROM accounts WHERE user_id = '$user_id' AND acc_number = '$sender_account'");

        // if ($query1) {
        $total_balance = $accountDetails['acc_balance'];

        if ($amount <= $total_balance) {
            $sql2 = "INSERT INTO transactions(`user_id`, `beneficiary`, `type`, `amount`, `account_num`, `to_user`, `description`, `kind`, `is_credit`, `status`, `created_at`) VALUES ('$user_id','$acc_name', 1, $amount, '$sender_account', '$acc_number', '$desc', '$kind', '0', 'pending', now())";
            $query2 = validateQuery($sql2);

            if ($query2) {
                return true;
            }
        } else {
            $balance_err = "Insufficient Balance";
            return $balance_err;
        }
        // } else {
        //     $err_user = "Error from getting users";
        //     return $err_user;
        // }
    } else {
        return $errors;
    }
}


function credit_account($post, $user_id)
{
    extract($post);
    $err_flag = false;
    $errors = [];

    if (!empty($amount)) {
        $amount = sanitize($amount);
    } else {
        $err_flag = true;
        $errors[] = "Amount is empty";
    }

    if ($err_flag === false) {
        $ql = "SELECT * FROM accounts WHERE user_id = '$user_id'";
        $qq = executeQuery($ql);

        if ($qq) {
            $details = $qq;
            $amount_in_db = $details['acc_balance'];
            $acc_number = $details['acc_number'];

            $update_balance = $amount + $amount_in_db;

            $sql = "UPDATE accounts SET acc_balance = $update_balance WHERE user_id = '$user_id'";
            $result = validateQuery($sql);

            if ($result) {
                $sql2 = "INSERT INTO transactions (user_id, type, amount, to_user, status, country, kind) VALUES ('$user_id', 0, $amount,' $acc_number', 'approved', '$country', 'deposit')";
                $query2 = validateQuery($sql2);

                if ($query2) {
                    return true;
                } else {
                    $err = "Error! try again";
                }
            }
        }
    } else {
        return $errors;
    }
}

function Transactions($user_id, $status)
{
    $sql = "SELECT * FROM transactions WHERE is_credit = 0 AND user_id = '$user_id' AND status = '$status' ORDER BY created_at DESC";
    $result = returnQuery($sql);

    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return false;
    }
}

function updateProfileImage($file, $user_id)
{
    $errors = [];

    if (!empty($file['img'])) {
        $profileImage =  time() . sanitize($file['img']['name']);
        $profileImageTmp = $file['img']['tmp_name'];
        move_uploaded_file($profileImageTmp, "../media/users/$profileImage");
    } else {
        $errors[] = "Profile Image is required";
    }

    if (!$errors) {
        $sql = "UPDATE users SET profile_pic = '$profileImage' WHERE id = '$user_id'";
        $query = validateQuery($sql);

        if ($query) {
            return true;
        } else {
            return "Failed to add image";
        }
    } else {
        return $errors;
    }
}

function sendTicket($post)
{
    extract($post);
    $errors = [];

    if (!empty($subject)) {
        $subject = ALLOW_SAFE_SYMBOLS(sanitize($subject));
    } else {
        $errors[] = "Please enter ticket subject";
    }


    if (!empty($query)) {
        $query = ALLOW_SAFE_SYMBOLS(sanitize($query));
    } else {
        $errors[] = "Please enter ticket query";
    }

    if (!$errors) {
        $sql = "INSERT INTO tickets (sender_acc, sender_name, subject, query) VALUES ('$acc_number', '$username', '$subject', '$query')";

        $result = validateQuery($sql);

        if ($result) {
            return true;
        } else {
            return "Please try sending again";
        }
    } else {
        return $errors;
    }
}

// GET USER DETAIL
function getUsersDetails($userId)
{
    $user = executeQuery("SELECT * FROM users WHERE id = '$userId'");
    return $user;
}

function getUsersAccountsDetails($userId)
{
    $query = returnQuery("SELECT * FROM accounts WHERE user_id = '$userId'");
    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}

function getUsersAccountsTickets($accounts)
{
    $queryString = join(" OR ", array_map(function ($account) {
        return "sender_acc = '$account'";
    }, $accounts));
    $query = returnQuery("SELECT * FROM tickets WHERE `status` = 1 AND " . $queryString);
    return mysqli_num_rows($query);
}
