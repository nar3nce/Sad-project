<?php



function delete()
{
	
	include('../conn.php');
	$id=$_GET['del'];
	$sql = "delete from user_loans where user_loan_id = '$id' ";
	$conn->query($sql);
	header('location:request_loan.php');
}

function add()
{
	
	include('../conn.php');
	$id = $_POST['id'];
	$loan_type = $_POST['loan_type'];
	$payment_type = $_POST['payment_type'];
	$loan_amount = $_POST['loan_amount'];
	$user_attach_name = $_POST['user_attach_name'];
	$original = explode('.', $_FILES["attach_ment"]["name"]);
    $extension = array_pop($original);
    $new = $id.'_'.$loan_type.'_'.$user_attach_name.'.'.$extension;
	
	$sql = "INSERT INTO `user_loans` (`user_loan_id`, `user_loan_userid`, `user_loan_type_id`, `user_loan_payment_method_id`, `user_loan_amount`, `user_loan_status`, `user_loan_accepted_date` , `user_loan_attachment_name`) VALUES (NULL, '$id', '$loan_type', '$payment_type', '$loan_amount', 'pending', '0000-00-00' , '$new') ";
	$conn->query($sql);
	
	if (move_uploaded_file($_FILES['attach_ment']['tmp_name'], __DIR__.'/user_attachments/'.$new)) {
header('location:request_loan.php');  } 
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
?>