<?php  
	require_once "controller.php";

	if (isset($_GET["show_message"])){
		controller::show_message();
	}
?>