<?php

function edit()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	$payment_method_rate=$_POST['payment_method_rate'];
	
   	$sql = " UPDATE `payment_method` SET `payment_method_rate` = '$payment_method_rate' WHERE `payment_method`.`payment_method_id` = '$id' ";
	$conn->query($sql);
	header('location:payment_options.php');
}

function delete()
{
	include('../conn.php');
	$id=$_GET['del'];
	
   	$sql = " DELETE FROM `payment_method` WHERE `payment_method`.`payment_method_id` = '$id' ";
	$conn->query($sql);
	header('location:payment_options.php');
}

function add()
{
	
	include('../conn.php');
	$payment_type = $_POST['payment_type'];
	$payment_rate = $_POST['payment_rate'];
	
	
	$sql = " INSERT INTO `payment_method` (`payment_method_id`, `payment_method_type`, `payment_method_rate`) VALUES (NULL, '$payment_type', '$payment_rate') ";
	$conn->query($sql);
header('location:payment_options.php');
	
}


if(isset($_GET['del']))
{
delete();
}

if(isset($_POST['add']))
{
add();
}
if(isset($_POST['update']))
{
edit();
}
?>