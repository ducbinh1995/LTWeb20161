<?php 
	require_once("../model/auction.php");
	require_once("../model/product.php");
	session_start();
	Auction::create(array("user_id" => $_SESSION["current_user"], "product_id" => $_POST["product_id"], "current_price" => $_POST["current_price"], "step" => $_POST["step"], "end_date" => $_POST["end_date"]));

	$product = Product::findById($_POST["product_id"]);
	$product->updateById(array("status" => "selling"));
	header("Location: ../view/index.php");

 ?>