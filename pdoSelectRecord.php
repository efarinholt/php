<?php	
	require('pdoConnectionClass.php'); // connection class is required for pdo handler
	
	$st = $handler->prepare("SELECT * FROM tbl_users"); // select all records from the table 'tbl_users'
	$st->bindColumn('user_first', $user_first); // bind the columns to variables
	$st->bindColumn('user_last', $user_last);
	$st->bindColumn('user_email', $user_email);
	$st->execute(); // execute the query
	
	while ($st->fetch(PDO::FETCH_BOUND)) { // execute action on the fetched values
		echo "<span>Hello $user_first $user_last!</span>\n";
		echo "<span>Email: $user_email</span>";
	}
?>
