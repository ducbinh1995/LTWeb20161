<?php  
	/**
	* 
	*/
	class Alert 
	{
		private $alert, $msg;
		function __construct($msg)
		{
			$this->alert = "";
			$this->msg = $msg;
		}

		public function getAlert(){
			$this->alert .= "<script type='text/javascript'>alert('$this->msg');</script>";
			return $this->alert;
		}
	}
?>