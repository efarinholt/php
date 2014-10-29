<?php

$fields = array(
	"email" => rawurlencode($user_email),
	"first_name" => rawurlencode($user_first),
	"last_name" => rawurlencode($user_last)
);

foreach($fields as $key => $value){ $fields_string .= $key . '=' . $value . '&';}

$fields_string = substr($fields_string, 0, -1);			

$post_url = 'http://post.quantum3media.com/submit/form.php?' . $fields_string;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $post_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_TIMEOUT, 30);

$result = curl_exec($ch);
curl_close($ch);

?>
