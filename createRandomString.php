<?php
function fx_RandString($length) { // define function and set length as variable
	$stringChars = '0123456789'; // random string will call from this list of characters
	$randString = '';
	for ($i = 0; $i < $length; $i++) {
		$randString .= $stringChars[rand(0, strlen($stringChars) - 1)]; // loop through characters and construct string
	}
	return $randString; // return the randomized string
}

$myRandString = fx_RandString($length = '6'); // call function and define string length

?>
