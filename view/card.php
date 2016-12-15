<script type="text/javascript" src="js/jquery.countdown-2.2.0/jquery.countdown.js"></script>
<script type="text/javascript" src="js/jquery.countdown-2.2.0/jquery.countdown.min.js"></script>
<?php  
	/**
	* 
	*/
	class Card 
	{
		private $end_date, $image, $name, $price_to_bid, $card, $product_id;
		public function __construct($image, $name, $price_to_bid, $end_date, $product_id)
		{
			$this->card = "";
			$this->image = $image;
			$this->name = $name;
			$this->price_to_bid = $price_to_bid;
			$this->end_date = $end_date;
			$this->product_id = $product_id;
		}

		public function getCard(){
			$this->card .= "<html><div class = \"w3-quarter\">
			<a href=\"product.php?product_id=".$this->product_id."\"><img src=".$this->image." alt = \"$this->name\" style=\"width:100%\"></a>
			<h3>$this->name</h3>
			<p>Price to bid: $this->price_to_bid$</p>
			<p id = ". $this->product_id ." class = \"w3-text-red timer\"></p>
			</div></html>";
			return $this->card;
		}

	}
?>
	<script type="text/javascript">
		

		$(document).ready(function(){
			$(".timer").each(function(){
				var id = $(this).attr('id');
				$.post("test.php", {product_id : id}, function(data){
					$("#"+id).countdown(data, function(event) {
						$(this).text(
							event.strftime('%D days %H:%M:%S')
						);
					});
				});
			});
		});

	</script>
