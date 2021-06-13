<?php
if ($_SERVER['REQUEST_METHOD'] == "GET" && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
	header('Location: ../index.php');
}
if (isset($_POST['login'])) {
	$email = $getFromS->InputValidate($_POST['email']);
	$password  = $getFromS->InputPassword($_POST['password']);

	if (empty($email) || empty($password)) {
		$error = "Please fill all fields";
	} else {
		if ($getFromS->loginUser($email, $password) == false) {
			$error = "Wrong email or password";
		} else {
			if ($getFromS->checkAccountStatus($email) == false) {
				$error = "Account not verified";
			}
		}
	}
}
