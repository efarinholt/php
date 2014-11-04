<?php	
require('pdoConnectionClass.php'); // connection class is required for pdo handler
class cl_UserEvaluation{
	private $db;
	public function __construct(){
		$this->db = new Connection();
		$this->db = $this->db->dbConnect();
	}
	function fx_PdoInnerJoin($user_email){ // define the function and expected incoming parameter
		try {
			// selects all records that match the incoming variable
			$st = $handler->prepare("
				SELECT user_email
				FROM table1
				JOIN table2
				ON table1.user_email=table2.user_email
				WHERE user_email='$user_email';
			");
			$st->bindColumn('user_first', $user_first); // bind the matched columns to variables
			$st->bindColumn('user_last', $user_last);
			$st->bindColumn('user_email', $user_email);
			$st->execute(); // execute the query
			while($st->fetch(PDO::FETCH_BOUND)){
				return array($user_first, $user_last, $user_email); // results to be returned when class method is called
			}
		}catch(PDOException $e){
			print $e->getMessage();
		}
	} // END fx_PdoSelect
} // END cl_UserEvaluation

$object = new cl_UserEvaluation(); // call the function in later code
list($user_first, $user_last, $user_email) = $object->fx_PdoInnerJoin($user_email); // assign return values to list variables
?>
