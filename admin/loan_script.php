<?php

function edit()
{
	
	include('../conn.php');
	$id=$_GET['id'];
	
	$loan_name=$_POST['loan_name'];
	$loan_rate=$_POST['loan_rate'];
	
   	$sql = " UPDATE `loan_types` SET `loan_type_name` = '$loan_name', `loan_type_rate` = '$loan_rate' WHERE `loan_types`.`loan_type_id` = '$id' ";
	$conn->query($sql);
	header('location:loan_types.php');
}

function delete()
{
	
}

function add()
{
	
	include('../conn.php');
	$loan_type = $_POST['loan_type'];
	$loan_rate = $_POST['loan_rate'];
	
	$original = explode('.', $_FILES["attach_ment"]["name"]);
    $extension = array_pop($original);
    $new = $loan_type.'.'.$extension;
	
	$sql = "INSERT INTO `loan_types` (`loan_type_id`, `loan_type_name`, `loan_type_rate` , `loan_attachment_name`) VALUES (NULL, '$loan_type', '$loan_rate' , '$new' ) ";
	$conn->query($sql);
	
	
if (move_uploaded_file($_FILES['attach_ment']['tmp_name'], __DIR__.'/loan_pdfs/'.$new)) {
   header('location:loan_types.php');
  } 
  else {
   echo "File was not uploaded";
  }


	
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