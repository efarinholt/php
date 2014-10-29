<?php

//The Class
class className{
	public function myFunction($var1, $var2){
		
		if($x){
			$return1 = 'aaa';
			$return2 = 'bbb';
		}else{
			$return1 = 'ccc';
			$return2 = 'ddd';
		}
		return array($return1, $return2);		
	}
}

//The Call
$object = new className();
list($return1, $return2) = $object->checkUser($var1, $var2);

?>
