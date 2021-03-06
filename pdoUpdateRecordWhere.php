<?php
require('pdoConnectionClass.php'); // connection class required for pdo handler

class cl_UserAction{ // define class name
    private $db;
    public function __construct(){
    	$this->db = new Connection();
    	$this->db = $this->db->dbConnect();
    }
    function fx_PdoUpdate($user_email, $user_first, $user_last, $user_phone){ // define function name and expected incoming parameter
        try{
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
            
        }catch(PDOException $e){
            print $e->getMessage();
        }
    } // END fx_PdoUpdate
} // END cl_UserAction

$object = new cl_UserAction(); // call the class name
$object->fx_PdoUpdate($user_email, $user_first, $user_last, $user_phone);

?>
