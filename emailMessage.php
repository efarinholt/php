<?php
function fx_EmailMessage($user_email, $user_phone){
    // define email headers
    $headers .= 'From: FIS Admin <admin@fireinspace.net>' . "\r\n"; 
    // define the content of the email
    $submit_message = "Error in following record: \n Email: $user_email \n Phone: $user_phone \n";
    // send the message
    mail('admin@fireinspace.net', 'Error', $submit_message, $headers);
}
?>
