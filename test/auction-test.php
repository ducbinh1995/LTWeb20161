<?php 
	require('../connection.php');
	require('../model/model.php');
	require('../model/product.php');
	require('../model/auction.php');
	require('../model/user.php');

	$result = User::find(function($var){
		return $var->last_name == "nguyen";
	});
	//$result = array_values($result); 
	echo(json_encode($result));
 ?>