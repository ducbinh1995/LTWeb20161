<?php
include_once("../model/user.php");

class controller {
	public $user;	
 
     public function __construct()  
     {  
          $this->user = new User();
     } 

	public function user_control() {
		if(isset($_POST['usrname'])&&isset($_POST['psw'])) {
			$usrname=$_POST['usrname'];
			$psw=$_POST['psw'];
			$data=array("username" => $usrname, "password" => $psw);
			$this->user->login($data);
		}
	}
}
?>