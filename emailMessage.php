<?php

// define email headers
$headers .= 'From: FIS Admin <evan@fireinspace.net>' . "\r\n"; 
// define the content of the email
$submit_message = "Error in following record: \n Email: $user_email \n Phone: $user_full_phone \n Post URL: $post_url";
// send the message
mail('evan@fireinspace.net', 'Error', $submit_message, $headers);

?>
