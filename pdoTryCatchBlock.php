<?php
try{
	myFunction();
}catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>
