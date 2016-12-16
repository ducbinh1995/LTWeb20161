<?php 
	require_once("../model/auction.php");
	
	$result = Auction::find(function($var){
		return $var->auction_id == $_POST["auction_id"];
	});

	echo($result[0]->end_date);
	//echo("2017/01/01");
 ?>