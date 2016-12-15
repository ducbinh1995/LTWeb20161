<?php
	require "controller.php";
	
	if(isset($_POST['usrname'])&&isset($_POST['psw'])&&isset($_POST['login'])) {
		controller::login_control();
	}
	if(isset($_GET['logout']))
		controller::logout_control();
?>