<?php

$url_request = 'http://api.url.com';

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url_request);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$response = curl_exec($curl);
curl_close($curl);
$xml = simplexml_load_string($response);

?>
