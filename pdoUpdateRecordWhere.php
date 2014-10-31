<?php
require('pdoConnectionClass.php'); // connection class required for pdo handler

class userUpdate{ // define class name
    function pdoUpdate($user_email){ // define function name and expected incoming parameter
        // update records that match the incoming variable
        $st = $handler->prepare("
            UPDATE tbl_users
            SET user_first=?, user_last=?, user_phone=?
            WHERE user_email ='$user_email'
        ");
        
        $st->bindParam(1, $user_first);
        $st->bindParam(2, $user_last);
        $st->bindParam(3, $user_phone);
        $st->execute();
    }
}
?>
