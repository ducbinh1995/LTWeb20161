<?php 

	class Auction extends Model {

		protected $auction_id;
		protected $user_id;
		protected $product_id;
		protected $created;
		protected $image;
		protected $step;
		public $current_price;
		public $start_date;
 		public $end_date;
 		public $product_name;
		
		public static function getTableName() {
			return "auction";
		}
		
		public function getId() {
			return $this->auction_id;
		}

		public static function all() {
			$auctions = self::find();
			foreach($auctions as $auction){
				$product = Product::findById($auction->product_id);
				$auction->product_name = $product->product_name;
			}
			return $auctions;
		}

		public function bid($price)
		{
			if(!isset($_SESSION["current_user"]))
				die("You have to login first");

			if($this->current_price >= $price){

				die("You have to bid higher");

			} else {
				Message::create(array("user_id" => $this->user_id, "description" => "Someone pay higher bid than you on your watching auction"));

				$this->updateById(array("current_price" => $price, "auction_id" => $_SESSION["current_user"]));
			}
		}
	}
 ?>