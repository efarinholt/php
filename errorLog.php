<?php

$add_to_log = "$user_email|$user_name|$user_phone\n";
$log_file = 'db_Log.txt';
$fp = fopen($log_file, "a+");
fputs($fp, $add_to_log);
fclose($fp);

?>
