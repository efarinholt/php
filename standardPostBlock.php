<?php

// user input variables have no value until form is submitted
$user_name = '';
$user_email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') { // execute following code once request method is defined as POST
	
	// user input variables assigned to populated input values
	$user_name = strip_tags(stripslashes($_POST['user_name'])); // strips any unwanted code from user-defined content
	$user_email = strip_tags(stripslashes($_POST['user_email'])); 
    
    
	if($_POST['submit']){ // execute if the user clicks submit
	    // assign session variables so that input values are preserved if page is reloaded
		$_SESSION['ses_user_name'] = $user_name; 
		$_SESSION['ses_user_email'] = $user_email; 
	}
}
	
?>
