<?php
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
			User::login($data);
	}
}
?>