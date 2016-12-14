<script type="text/javascript" src="http://yourjavascript.com/88131111995/jquery.countdown.js">
</script>
<?php  
	/**
	* 
	*/
	class Card 
	{
		private $image, $name, $price_to_bid, $card;
		public function __construct($image, $name, $price_to_bid)
		{
			$this->card = "";
			$this->image = $image;
			$this->name = $name;
			$this->price_to_bid = $price_to_bid;
		}

		public function getCard(){
			$this->card .= "<html><div class = \"w3-quarter\">
			<img src=$this->image alt = \"$this->name\" style=\"width:100%\">
			<h3>$this->name</h3>
			<p>Price to bid: $this->price_to_bid</p>
			<p class = \"w3-text-red\">
			<p class = \"timer\"></p></p>
			</div></html>";
			return $this->card;
		}

	}
?>
<script type="text/javascript">
	$(document).ready(function () {
	    $('.timer').countdown({
	        until: new Date(2020, 8 - 1, 8),
	        format: 'd H M S'
	    });
	});
</script>