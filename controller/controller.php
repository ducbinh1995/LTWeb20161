<?php
require "../view/alert.php";
include_once("../model/user.php");

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

	public static function logout_control() {
		session_start();
		User::logout();
		header("Location: ../view/index.php");
	}
}
?>