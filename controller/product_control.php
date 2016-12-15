<?php
	require "controller.php";
	if(isset($_GET['show_product']))
		Controller::user_product();
?>