<?php

class className{ // define class name
	public function myFunction($var1, $var2){ // define function and expected incoming parameters
		
		//conditions of function
		if($var1 == '111' && $var2 == '222'){
			$return1 = 'aaa';
			$return2 = 'bbb';
		}else{
			$return1 = 'ccc';
			$return2 = 'ddd';
		}
		return array($return_1, $return_2); // results to be returned when class method is called
	}
}


$object = new className(); // call the function in later code
list($return_1, $return_2) = $object->checkUser($var1, $var2); // assign return values to list variables

?>
