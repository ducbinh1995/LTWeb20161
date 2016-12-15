<?php
include_once("../model/user.php");

class controller {
	public $user;	
 
     public function __construct()  
     {  
          $this->user = User::findById($_SESSION["current_user"]);
     } 

	public function user_control() {
		if(isset($_POST['usrname'])&&isset($_POST['psw'])) {
			$usrname=$_POST['usrname'];
			$psw=$_POST['psw'];
			$data=array("username" => $usrname, "password" => $psw);
			User::login($data);
		}
	}
}
?>