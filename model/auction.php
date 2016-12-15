<?php 
	
	require("model.php");

	class Auction extends Model {

		protected $auction_id;
		protected $user_id;
		protected $product_id;
		public $created;
		public $image;
		public $step;
		public $current_price;
		public $start_date;
 		public $end_date;
 		public $product;
		
 		public function __construct($data) {
 			$product = Product::findById($data["product_id"]);
 			$data["product"] = $product;
 			foreach($data as $key => $value) {
 				$data->$key = $value;
 			}
 		}

		public static function getTableName() {
			return "auction";
		}

		public function getId() {
			return $this->auction_id;
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