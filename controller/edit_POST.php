<?php 
	require_once("../model/user.php");
	session_start();
	$str = $_SESSION["current_user"];
	$user = User::findById($str);
	$result = array();

	
	$result["email"] = $_POST["email"];
	$result["first_name"] = $_POST["first_name"];
	$result["last_name"] = $_POST["last_name"];
	$result["phone"] = $_POST["phone"];
	$result["password"] = $_POST["password"];
	$user->updateById($result);
	header("Location: ../view/admin.php");
 ?>