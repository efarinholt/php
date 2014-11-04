<?php
funciton fx_LogAction($user_email, $user_name, $user_phone, $user_action){
    $add_to_log = "$user_email|$user_name|$user_phone|$user_action\n"; // define contents of log entry
    $log_file = 'db_Log.txt'; // define log file location
    $fp = fopen($log_file, "a+"); // open log file
    fputs($fp, $add_to_log); // write to log file
    fclose($fp);
}
?>
