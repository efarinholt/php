<?php

class Connection{ // define class name
	public function dbConnect(){ // define function name
		// connect via pdo and define server url, db name, username, and password
		return new PDO("mysql:host=SERVER_URL; dbname=DB_NAME", "USER_NAME", "PASSWORD"); 
	}
}

class anotherClass{
	// call within another class to establish connection
	private $db;	
	public function __construct(){
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
	}
}

?>
