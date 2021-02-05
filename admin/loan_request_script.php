<?php

function accept()
{
	
	include('../conn.php');
	$id=$_GET['accept'];
	$date = date('y-m-d');
	
   	$sql = " UPDATE `user_loans` SET `user_loan_status` = 'Accepted!', `user_loan_accepted_date` = '$date' WHERE `user_loans`.`user_loan_id` = '$id'";
	$conn->query($sql);
	header('location:loan_requests.php');
}

function deny()
{
	include('../conn.php');
	$id=$_GET['deny'];
	$date = date('y-m-d');
	
   	$sql = " UPDATE `user_loans` SET `user_loan_status` = 'Denied!', `user_loan_accepted_date` = '$date' WHERE `user_loans`.`user_loan_id` = '$id'";
	$conn->query($sql);
	header('location:loan_requests.php');
}


if(isset($_GET['accept']))
{
accept();
}

if(isset($_GET['deny']))
{
deny();
}
?>