<?php
function logFile($user_email, $user_phone, $admin_email){
    // define email headers
    $headers .= 'From: FIS Admin <' . $admin_email . '>' . "\r\n"; 
    // define the content of the email
    $submit_message = "Error in following record: \n Email: $user_email \n Phone: $user_phone \n Post URL: $post_url";
    // send the message
    mail($admin_email, 'Error', $submit_message, $headers);
}
?>
