<?php  
	session_start();
	require_once("../model/auction.php");
	$auction = Auction::findById($_POST["auction_id"]);
	$auction->product->updateById(array( "status" => "deactive" ));
	header("Location: ../view/index.php");
	?>