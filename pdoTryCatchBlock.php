<?php
try{ // try the following code and watch for errors
	fx_MyFunction();
}catch(PDOException $e){ // if errors occur, display them
	echo $e->getMessage();
	die();
}
?>
