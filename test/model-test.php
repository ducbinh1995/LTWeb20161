<?php
	
	require("../model/user.php");

	function test($var) {
		return $var->user_name == "lord";
	}

	$result = User::find("test");

	foreach($result as $result_key => $result_value){
		echo(json_encode($result_value));
	}
	//echo($result);
	//echo($result);
 ?>