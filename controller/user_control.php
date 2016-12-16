<?php
	require_once "controller.php";
	
	if(isset($_POST['usrname'])&&isset($_POST['psw'])&&isset($_POST['login'])) {
		controller::login_control();
	}
	if(isset($_GET['logout']))
		controller::logout_control();

	if(isset($_GET['show_user']))
		controller::show_users();
	if(isset($_POST['usrname'])&&isset($_POST['psw'])&&isset($_POST['confirmpsw'])&&isset($_POST['sign_up'])) {
		if($_POST['psw']==$_POST['confirmpsw'])
			controller::signup_control();
		else {
			$signup_fail_alert = new Alert("Password not match! Try again!");
			echo $signup_fail_alert->getAlert();
		}
	}
	if(isset($_POST['usrname'])&&isset($_POST['email'])&&isset($_POST['reset_psw'])) {
		$reset_psw_alert = new Alert("Your Password is 123456");
			echo $reset_psw_alert->getAlert();
	}
?>