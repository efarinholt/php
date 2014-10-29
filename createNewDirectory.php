<?php
function newDirectory($dirName){
	$newDirectory = mkdir ('/path/to/file/' . $dirName , 0777);
	return $newDirectory;
}
?>
