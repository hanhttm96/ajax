<?php

	/*
	* Config to connet database
	*/

	// Host name of server.
	$db_host = 'localhost';

	// User name to login mysql.
	$db_user = 'root';

	// Pass word to login.
	$db_pass = '';

	// Database will connect.
	$db_name = 'sample';

	// Connect to database.
	$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

	// Check error connect.
	if(mysqli_connect_errno()) {
		echo "Failed to connect to MySQL ".mysql_error();
	}
?>