<?php

$project = 'myProject';
$round = 'r4';

if (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', '::1'))) { // if file is called locally (local ip address)
	$root = $_SERVER['DOCUMENT_ROOT'] . "/$project/";
	$metaroot = "/$project/";
}else{ // else define remote file path
	$root = "/home/170115/domains/fisdev.fireinspace.net/html/Q3M_Design/$project/$round/";
	$metaroot = "http://fisdev.fireinspace.net/Q3M_Design/$project/$round/";
}
?>
