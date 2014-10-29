<?php

//connection class
class Connection{
	public function dbConnect(){
		return new PDO("mysql:host=SERVER_URL; dbname=DB_NAME", "USER_NAME", "PASSWORD");
	}
}

//other class
class otherClass{
	private $db;	
	public function __construct(){
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
	}
	//the rest of your code...
}

?>
