<?php 
	require('../connection.php');
	require('../model/model.php');
	require('../model/product.php');
	require('../model/auction.php');
	require('../model/user.php');

	$user = User::findById(1);
	$user->updateById(array("first_name" => "hailong"));
	//echo(json_encode($result[0]));
 ?>