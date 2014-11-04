<?php

require('pdoConnectionClass.php'); // connection class is required for pdo handler

class cl_pdoInstert{ // define class name
	private $db;
	public function __construct(){
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
	}
	public function fx_instertRecord($user_email, $user_first, $user_last){ // define function name and expected incoming parameters
		try {	
			$st = $handler->prepare( // sql insert query, which defines the table name and field names that will recieve the content
				"INSERT INTO tbl_users 
				(user_email, user_first, user_last) 
				VALUES 
				(?,?,?)"
			);
			// bind parameters to the anonymized insert values from line 11
			$st->bindParam(1, $user_email); 
			$st->bindParam(2, $user_first);
			$st->bindParam(3, $user_last);
			$st->execute(); // execute the sql insert
		}catch(PDOException $e){
			print $e->getMessage();
		}	
	} // END fx_instertRecord
} // END cl_pdoInstert


$object = new pdoInstert(); // call the class name
$object->instertRecord($user_email, $user_first, $user_last); // call the function and define the variables to insert

?>
