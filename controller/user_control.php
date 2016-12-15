<?php
	require "controller.php";
	
	if(isset($_POST['usrname'])&&isset($_POST['psw'])&&isset($_POST['login'])) {
		Controller::login_control();
	}
	if(isset($_GET['logout']))
		Controller::logout_control();
?>