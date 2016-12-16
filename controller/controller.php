<?php
require "../view/alert.php";
require_once("../model/user.php");
require_once("../model/auction.php");
require_once("../model/category.php");
require_once("../model/model.php");
require_once("../model/product.php");

class controller {
	public $user;	
    public function __construct()  
    {  
          $this->user = User::findById($_SESSION["current_user"]);
    } 

    private static function get_product_category_id($category_id){
    	return $category_id;
    }

	public static function login_control() {
		$usrname=$_POST['usrname'];
		$psw=$_POST['psw'];
		$data=array("username" => $usrname, "password" => $psw);
		$check_login=User::login($data);
		if($check_login==false){
			$login_fail_alert = new Alert("Login Fail");
			echo $login_fail_alert->getAlert();
		}
		else{
			header("Location: ../view/index.php");
		}
	}

	public static function show_users() {
		header("Location: ../view/all_user.php");
	}

	public static function logout_control() {
		session_start();
		User::logout();
		header("Location: ../view/index.php");
	}

	public static function signup_control() {
		$usrname=$_POST['usrname'];
		$psw=$_POST['psw'];
		$data=array("user_name" => $usrname, "password" => $psw);
		User::create($data);
	}

	public static function auction_control() {
		$list_auction = Auction::find(null);
		return $list_auction;
	}

	public static function auction_control_with_category($category_id){
		function filter ($var){
			return $var->product->category_id == $_GET["category_id"];
		} 
		$list_auction = Auction::find("filter");
		return $list_auction;
	}

	public static function auction_control_id($auction_id){
		$list_auction = Auction::findById($auction_id);
		return $list_auction;
	}

	public static function category_control(){
		$list_category = Category::find(null);
		return $list_category;
	}

	public static function user_product() {
		session_start();
		function test($var) {
			return $var->owner_id==$_SESSION["current_user"];
		}
		$_POST['curr_usr_product']=Product::find("test");
		header("Location:../view/list_products.php");
	}

	public static function product_control(){
		function filter($var){
			return $var->product_id == $_GET["product_id"];
		}
		$product = Product::find("filter");
		return $product;
	}

	public static function add_product_control() {
		session_start();
		$data=array("product_name"=>$_POST['prd_name'], "description"=>$_POST['descrip'], "category_id"=>$_POST['category_id'], "image"=>$_POST['image_link'], "owner_id"=>$_SESSION["current_user"], "status"=>"waiting");
		Product::create($data);
		$create_success_alert = new Alert($_POST['prd_name']." has been added!");
		echo $create_success_alert->getAlert();
	}

	public static function show_message() {
		session_start();
		function test_msg($var){
			return $var->user_id == $_SESSION["current_user"];
		}
		$_POST["curr_usr_message"] = Message::find("filter");
		header("Location:../view/message.php");
	}
}
?>