<?php 
	require('../connection.php');
	require('../model/model.php');
	require('../model/user.php');

	$result = User::create(array("user_name" => "asdsad", "password" => "fqfwqqw", "email" => "asd@mail.com"));

	foreach($result as $result_key => $result_value){
		echo($result_value);
	}
	//echo($result);
	//echo($result);
 ?>