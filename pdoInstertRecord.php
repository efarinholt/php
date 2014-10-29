<?php

class pdoInstert{ // define class name
	
	public function instertRecord($user_email, $user_first, $user_last){ // define function name and expected incoming parameters
			
		$st = $this->db->prepare( // sql insert query, which defines the table name and field names that will recieve the content
			"INSERT INTO tbl_users 
			(user_email, user_first, user_last) 
			VALUES 
			(?,?,?)"
		);
		// bind parameters to the anonymized insert values from line 11
		$st->bindParam(1, $user_email); 
		$st->bindParam(2, $user_first);
		$st->bindParam(3, $user_last);
		$st->execute(); // execute the insert
			
	}
}

$object = new pdoInstert(); // call the class name
$object->instertRecord($user_email, $user_first, $user_last); // call the function and define the variables to insert

?>
