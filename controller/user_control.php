<?php
	require "controller.php";
	
	if(isset($_POST['usrname'])&&isset($_POST['psw'])&&isset($_POST['login'])) {
		controller::login_control();
	}
?>