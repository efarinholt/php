<?php

class myClass{ // define class name
	public function myFunction($x){ // define function name and the expected incoming parameter
		
		// conditions of function
		if($x == 'a'){
			$variable = '1';
		}else{
			$variable = '2';
		}
		
		return $variable; // return a value
	}
}

$object = new myClass(); // call the class
$variable = $object->myFunction($x); // call the function and get returned value

?>
