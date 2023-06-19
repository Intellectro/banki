<?php

session_start();
require_once("../../admin/inc/functions/config.php");
require_once("../../admin/inc/functions/helpers.php");

if (isset($_POST['submit'])) {
	try {
		$fullname = check_inputs($_POST["fullname"]);
		$username = check_inputs($_POST["username"]);
		$phone = check_inputs($_POST["phone"]);
		$email = check_inputs($_POST["email"]);
		$ssn = check_inputs($_POST["ssn"]);
		$address = check_inputs($_POST["address"]);
		$dob = check_inputs($_POST["dob"]);
		$acctType = check_inputs($_POST["acc_type"]);
		$password = check_inputs($_POST["password"]);
		$confirmPassword = check_inputs($_POST["confirm_pwd"]);
		$terms = check_inputs($_POST["terms"]);

		if (empty($fullname)) {
			throw new Exception("Please enter your fullname");
		}
		if (preg_match("/^[0-9]/", $fullname)) {
			throw new Exception("Please this Input box allows only letters");
		}

		if (empty($username)) {
			throw new Exception("Please enter your username");
		}

		if (empty($email)) {
			throw new Exception("Please enter your email address");
		}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			throw new Exception("Invalid email address");
		}

		if (empty($address)) {
			throw new Exception("Please enter a valid address");
		}
		if (empty($dob)) {
			throw new Exception("Empty input form");
		}

		if (empty($acctType)) {
			throw new Exception("Please Select Any Account Type");
		}

		if (empty($password)) {
			throw new Exception("Please enter your password");
		}
		if (empty($confirmPassword)) {
			throw new Exception("Please enter the same password");
		}

		if (strlen($password) < 8) {
			throw new Exception("Password must be at least 8 characters");
		}

		if ($password !== $confirmPassword) {
			throw new Exception("Password does not match");
		}

		if (empty($terms)) {
			throw new Exception("You must agree to the terms and conditions");
		}

		$password = password_hash($password, PASSWORD_DEFAULT);

		$userId = generateID("usr_", 9);
		$now = date("Y-m-d H:i:s");
		$access = 1;

		// Add new user
		$sql = "INSERT INTO `users`(`id`, `fullname`, `email`, `username`, `phone`, `ssn`, `address`, `dob`, `password`, `access`, `created_at`, `updated_at`) VALUES ('$userId', '$fullname', '$email', '$username', '$phone', '$ssn', '$address', '$dob', '$password', '$access', '$now', '$now')";
		$result = mysqli_query($link, $sql);

		if (!$result) throw new Exception("Error creating account, please try again");

		$accounts = [
			[
				"accountNumber" => generateNumber(10),
				"accountPin" => generateNumber(5),
				"accountCot" => generateNumber(4),
				"accountImf" => generateNumber(4),
				"accountType" => $acctType
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
			$accountPin = $account['accountPin'];
			$accountNumber = $account['accountNumber'];
			$accountType = $account['accountType'];
			$accountCot = $account['accountCot'];
			$accountImf = $account['accountImf'];
			$query = "INSERT INTO `accounts`(`acc_number`, `user_id`, `acc_type`, `acc_pin`, `cot`, `imf`) VALUES ('$accountNumber', '$userId', '$accountType', '$accountPin', '$accountCot', '$accountImf')";
			$queryStmt = mysqli_query($link, $query);
			if (!$queryStmt) throw new Exception("Error creating a account");
		}

		$notSuccessful = array_filter($success, function ($item) {
			return $item !== "true";
		});

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
			sendEmail($email, "Welcome To Jeko Credit Federal Union (JEKOCFU)", $message);
		}

		setAlert("Registration successful");
		header("Location: ../signin.php");
	} catch (Exception $e) {
		setAlert($e->getMessage(), "error");
		header("Location: ../signup.php");
	}
}


function check_inputs($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars(($data));
	return $data;
}
