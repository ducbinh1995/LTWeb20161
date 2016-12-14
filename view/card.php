<script type="text/javascript" src="js/jquery.countdown-2.2.0/jquery.countdown.js"></script>
<script type="text/javascript" src="js/jquery.countdown-2.2.0/jquery.countdown.min.js"></script>
<?php  
	/**
	* 
	*/
	class Card 
	{
		private $end_date, $image, $name, $price_to_bid, $card;
		public function __construct($image, $name, $price_to_bid, $end_date)
		{
			$this->card = "";
			$this->image = $image;
			$this->name = $name;
			$this->price_to_bid = $price_to_bid;
			$this->end_date = $end_date;
		}

		public function getCard(){
			$this->card .= "<html><div class = \"w3-quarter\">
			<img src=$this->image alt = \"$this->name\" style=\"width:100%\">
			<h3>$this->name</h3>
			<p>Price to bid: $this->price_to_bid</p>
			<p class = \"w3-text-red timer\"></p>
			</div></html>";
			return $this->card;
		}

	}
?>
	<script type="text/javascript">
		$(document).ready(function(){
			$.post("test.php", function(data){
				$(".timer").countdown(data, function(event) {
					$(this).text(
						event.strftime('%D days %H:%M:%S')
						);
				});
			})

		});

	</script>
