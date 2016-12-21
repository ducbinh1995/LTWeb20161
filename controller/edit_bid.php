<?php  
	session_start();
	require_once("../model/auction.php");
	require_once("../view/alert.php");
	$auction = Auction::findById($_POST["auction_id"]);
	$result = $auction->bid($_POST["bid_price"]);
	if ($result == "You have to login first") {
		$bid_fail_alert = new Alert("You have to login first");
		echo $bid_fail_alert->getAlert();
	}
	else if ($result == "You have to bid higher"){
		$bid_fail_alert = new Alert("You have to bid higher");
		echo $bid_fail_alert->getAlert();
	}
	else{
		header("Location: ../view/index.php");
	}
?>