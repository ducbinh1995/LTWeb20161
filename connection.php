<?php 
	
	class Db {

		private static $instance = NULL;

		private function __construct(){}

		public static function getInstance(){

			if(!isset(self::$instance)) {

				self::$instance = new PDO('mysql:host=127.0.0.1;dbname=auction', 'root', '');
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			}

			return self::$instance;
		}

	}

 ?>