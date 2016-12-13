<?php 
	require('../model/user.php');
	$data = array("username" => $_POST["username"], "password" => $_POST["password"]);
	//session_start();
	$result = User::login($data);
	echo($_SESSION["current_user"]);
 ?>