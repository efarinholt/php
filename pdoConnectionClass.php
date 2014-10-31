<?php

class Connection{ // define class name
	public function dbConnect(){ // define function name
		// connect via pdo and define server url, db name, username, and password
		return new PDO("mysql:host=SERVER_URL; dbname=DB_NAME", "USER_NAME", "PASSWORD"); 
	}
}

try{//use pdo to catch errors
	$handler = new Connection();
	$handler = $handler->dbConnect();
	$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo $e->getMessage();
	die();
}

?>
