<?php 

	// Import connect database
	include_once 'connection.php';

	$name_user = $_POST['name'];

	$email_user = $_POST['email'];

	$sql = "INSERT INTO `user` (`name_user`, `email_user`) VALUES ('$name_user','$email_user')";
	
	if (!mysqli_query($con,$sql)) {
		echo "Error : " .mysqli_error($con);
	}

	mysqli_close($con);

?>	