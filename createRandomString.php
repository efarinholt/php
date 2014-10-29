<?php
function randString($length = 6) {
	$stringChars = '0123456789';
	$randString = '';
	for ($i = 0; $i < $length; $i++) {
		$randString .= $stringChars[rand(0, strlen($stringChars) - 1)];
	}
	return $randString;
}
?>
