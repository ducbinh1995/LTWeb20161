<?php  
	session_start();
	require_once("../model/auction.php");
	$auction = Auction::findById($_POST["auction_id"]);
	$auction->bid($_POST["bid_price"]);
	header("Location: ../view/index.php");
	?>