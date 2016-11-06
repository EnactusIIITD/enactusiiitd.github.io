<?php


	// Read the form values and append a new line
	$email_address = $_POST['subscribe']."\n" ;

	// apend $email address to list.txt file
 	$myfile = file_put_contents('list.txt', $email_address.PHP_EOL , FILE_APPEND | LOCK_EX);


?>
