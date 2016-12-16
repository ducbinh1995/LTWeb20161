<?php
	require ("controller.php");
	if(isset($_GET['show_product']))
		controller::user_product();
	if(isset($_POST['add_product'])&&isset($_POST['category_id']))
		controller::add_product_control();
	else {
		$create_fail_alert = new Alert("Category is missing! Try again!");
		echo $create_fail_alert->getAlert();
	}
?>