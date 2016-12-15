<?php 
	require("model.php");

	class User extends Model {

		protected $user_id;
		public $user_name;
		protected $password;
		public $email;
		public $phone;
		public $profile_image;
		public $first_name;
		public $last_name;

		protected static $tableName = 'user';

		public static function getTableName() {
			return "user";
		}

		public function getId(){
			return $this->user_id;
		}

		public static function login($data) {
			
			//session_start();

			if(empty($_POST['username']) || empty($_POST['password'])){
				return 'Username and password cant be empty';
			} else {
				$db = DB::getInstance();
				$statement = $db->prepare("SELECT `user_id` from `user` where `user_name` = :username and `password` = :password");
				$statement->execute(array(':username' => $data["username"], ':password' => $data["password"]));
				$result = $statement->fetch(PDO::FETCH_ASSOC);
				if(isset($result["user_id"])){
					$_SESSION["current_user"] = $result["user_id"];
				} else {
					die("login fail");
				}
			}
		}

		public static function logout()
		{
			session_destroy();
		}
	} 


 ?>