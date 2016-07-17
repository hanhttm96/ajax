<?php
	
	// Import connect database
	include_once 'connection.php';

	// Query string
	$str = "SELECT * FROM user";

	// Run sql query
	$result = mysqli_query($con, $str);

	// Convert to Json.
	$rows = array();
	while ($r = mysqli_fetch_assoc($result)) {
		$rows[] = $r;
	}

	$json = json_encode($rows);

	mysqli_close($con);
	
	// Print and return results converted.
	print_r($json);

?>