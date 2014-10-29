<?php
try{ // try the following code and watch for errors
	myFunction();
}catch(PDOException $e){ // if errors occur, display them
	echo $e->getMessage();
	die();
}
?>
