<?php

function fx_CurlPost($user_email, $user_first, $user_last){
/* 
a function is defined which takes email, first name, and last name and passes it in a 
POST to a webservice, which will then return a response
*/

	$fields = array( 
		"email" => rawurlencode($user_email),
		"first_name" => rawurlencode($user_first),
		"last_name" => rawurlencode($user_last)
	);
	/*
	each field must be url encoded, so an array is set up with a key and value pair - 
	they key being the url parameter and the value is the encoded variable
	*/
	
	foreach($fields as $key => $value){ $fields_string .= $key . '=' . $value . '&';}
	/* 
	we loop through the array above and construct the url - it will output like this:
	email=evan@fireinspace.net&first_name=Evan&last_name=Farinholt&
	*/
	
	$fields_string = substr($fields_string, 0, -1); 
	// the last '&' from the url must be removed
	
	$post_url = 'http://evanfarinholt.com/api.php?' . $fields_string;
	/*
	now we have to add the url of our webservice, so the whole url will look like this:
	http://evanfarinholt.com/api.php?email=evan@fireinspace.net&first_name=Evan&last_name=Farinholt
	*/
	
	$ch = curl_init();
	// curl is initiated with the $ch variable and below a number of options are set
	
	curl_setopt($ch, CURLOPT_URL, $post_url); 
	// assign the url we constructed above to the curl post
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	// make sure a response is returned
	curl_setopt($ch, CURLOPT_TIMEOUT, 30); 
	// if the webservice doesn't return a response within this time period, the process is killed
	
	$result = curl_exec($ch); 
	// execute curl post and set $result as the response variable
	curl_close($ch); 
	// end the curl process
	
	return $result;
	/* 
	by returning the response variable, our output from the function will be whatever data 
	the webservice returns, ie.: XML, JSON, etc.
	*/
}
?>
