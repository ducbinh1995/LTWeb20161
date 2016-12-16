<?php 
	require_once("../model/product.php");
	require_once("../model/auction.php");
	require_once("../model/message.php");

	$auction = Auction::findById($_POST["auction_id"]);
	$auction->product->updateById(array("owner_id" => $auction->user_id, "status" => "waiting"));
	Message::create(array("user_id" => $auction->user_id, "description" => "Congratulation, You hava won a auction ". $auction->product->product_name));
	echo("dsadsadsad");
 ?>