<?php
/***
 * Lines 5-18 define the class and function. The function expects two variables. Values are returned from
 * the function if they meet certain criteria.
 * 
 * Lines 24-25 show how the class and function are called. The expected variables are included and passed to the 
 * function to be evaluated
***/

class cl_ExampleClass{ // define class name
	public function fx_ExampleFunction($var1, $var2){ // define function and expected incoming parameters
		
		//conditions of function
		if($var1 == '111' && $var2 == '222'){
			$return1 = 'aaa';
			$return2 = 'bbb';
		}else{
			$return1 = 'ccc';
			$return2 = 'ddd';
		}
		return array($return_1, $return_2); // results to be returned when class method is called
	} // END fx_ExampleFunction
} // END cl_ExampleClass


$object = new cl_ExampleClass(); // call the function in later code
list($return_1, $return_2) = $object->fx_ExampleFunction($var1, $var2); // assign return values to list variables

?>
