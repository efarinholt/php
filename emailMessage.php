<?php

$headers .= 'From: FIS Admin <evan@fireinspace.net>' . "\r\n";
$submit_message = "Error in following record: \n Email: $user_email \n Phone: $user_full_phone \n Post URL: $post_url";
mail('evan@fireinspace.net', 'Error', $submit_message, $headers);

?>
