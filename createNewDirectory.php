<?php
function fx_NewDirectory($dirName){ // define the function name and expected incoming parameter
	$newDirectory = mkdir ('/path/to/file/' . $dirName , 0777); // create the directory and set the permissions
	return $newDirectory; // return the directory name
}
?>
