<?php
	require ("controller.php");
	if(isset($_GET['show_product']))
		controller::user_product();
?>