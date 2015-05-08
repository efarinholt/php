<?php

/*
the curl webservice takes information from a url that is passed to it and sends a response - 
in this case, the response is a JSON object

for the sake of this example, the webservice url is:
http://evanfarinholt.com/api.php

we pass information via url-encoded parameters. so our final URL post will be:
http://evanfarinholt.com/api.php?email=evan@fireinspace.net&first_name=Evan&last_name=Farinholt

*/

$email		= $_GET['email'];
$first_name	= $_GET['first_name'];
$last_name	= $_GET['last_name'];


/*
this declairs each parameter in our url as its own variable. 
$_GET is a global variable in php that takes the value of the url parameter inside the brackets 
so in this example, $_GET['email'] will be 'evan@fireinspace.net'
*/

header('Content-Type: application/json');
// assigning this json header ensures that our response will be parsed properly by a third party

echo json_encode(array(
// encodes the array as json. 'echo' prints it to the page
	'users' => array(
		'user' => array(
			'info' => array(
				'first_name' => $first_name,
				'last_name' => $last_name,
				'email' => $email
			)
		)
	)
));

/*

passing the POST url will result in the json object below:

users: {
	user: {
		first_name: 'evan',
		last_name: 'farinholt',
		email: 'evan@fireinspace.net'
	}
}


*/
?>
