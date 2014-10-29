<?php

//the class
class pdoInstert{
	
	//make connection
	
	public function instertRecord($user_email, $user_first, $user_last, $user_username, $user_password, $user_pin, $user_status, $user_timestamp){
			
		$st = $this->db->prepare(
			"INSERT INTO tbl_users 
			(user_email, user_first, user_last, user_username, user_password, user_pin, user_status, user_timestamp) 
			VALUES 
			(?,?,?,?,?,?,?,NOW())"
		);
		$st->bindParam(1, $user_email);
		$st->bindParam(2, $user_first);
		$st->bindParam(3, $user_last);
		$st->bindParam(4, $user_username);
		$st->bindParam(5, $user_password);
		$st->bindParam(6, $user_pin);
		$st->bindParam(7, $user_status);
		$st->execute();
			
	}
}

//the call
$object = new pdoInstert();
$object->instertRecord($user_email, $user_first, $user_last, $user_username, $user_password, $user_pin, $user_status, $user_timestamp);

?>
