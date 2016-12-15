<?php
require "../view/alert.php";
require "../model/product.php";
require_once("../model/user.php");
require_once("../model/auction.php");
require_once("../model/category.php");

class controller {
	public $user;	
     public function __construct()  
     {  
          $this->user = User::findById($_SESSION["current_user"]);
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
			//include("../view/index.php");
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
		require("../view/list_products.php");
	}
}
?>