<?php

$fields = array( // define the fields that will be posted
	"email" => rawurlencode($user_email),
	"first_name" => rawurlencode($user_first),
	"last_name" => rawurlencode($user_last)
);

// loop through all fields and construct a url, separating each with an ampersand
foreach($fields as $key => $value){ $fields_string .= $key . '=' . $value . '&';}

$fields_string = substr($fields_string, 0, -1); // trim the last ampersand from the url

$post_url = 'http://post.quantum3media.com/submit/form.php?' . $fields_string;

$ch = curl_init(); // initiate curl
curl_setopt($ch, CURLOPT_URL, $post_url); // assign url to curl post
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // make sure a response is returned
curl_setopt($ch, CURLOPT_TIMEOUT, 30); // set timeout

$result = curl_exec($ch); // execute curl post and set reponse variable
curl_close($ch); // close curl

?>
