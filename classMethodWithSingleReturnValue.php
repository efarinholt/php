<?php

class cl_ExampleClass{ // define class name
	public function fx_ExampleFunction($x){ // define function name and the expected incoming parameter
		
		// conditions of function
		if($x == 'a'){
			$variable = '1';
		}else{
			$variable = '2';
		}
		
		return $variable; // return a value
		
	} // END fx_ExampleFunction
} // END cl_ExampleClass

$object = new cl_ExampleClass(); // call the class
$variable = $object->fx_ExampleFunction($x); // call the function and get returned value

?>
