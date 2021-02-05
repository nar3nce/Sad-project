<?php	
include 'conn.php';

if(isset($_POST['register'])){
	$first_name = $conn->real_escape_string($_POST['first_name']);
	$last_name = $conn->real_escape_string($_POST['last_name']);
	$email = $conn->real_escape_string($_POST['email']);
	$contact = $conn->real_escape_string($_POST['contact']);
	$username = $conn->real_escape_string($_POST['username']);
	$password = $conn->real_escape_string($_POST['password']);
	
	$sql = " INSERT INTO `users` (`user_id`, `user_firstname`, `user_lastname`, `user_username`, `user_password`, `user_email`, `user_contact_number`) VALUES (NULL, '$first_name', '$last_name', '$username', '$password', '$email', '$contact') " ;
	$query = $conn->query($sql);
	header('location: ../login');
	
}

?>