<?php	
session_start();
include 'conn.php';

if(isset($_POST['login'])){
	$username = $conn->real_escape_string($_POST['username']);
	$password = $conn->real_escape_string($_POST['password']);
	$utype = $conn->real_escape_string($_POST['usertype']);
	
	
	
	if ( $utype == 'admin' ){
                $sql = " select * from admin where admin_username = '$username' and admin_password = '$password' ";
	            $query = $conn->query($sql);
				  
				  if($query->num_rows != 0){
			        	$row = $query->fetch_array();
				        $admin_id = $row['admin_id'];
                        $_SESSION['admin_id'] = $admin_id;
				        @header("location: ../admin");
				   } 
				  else {
				        echo ' wrong username or password, try again later <a href="index.php">Click Here</a>';
				        exit();
				  }
			}
			else if ( $utype == 'user' ) {
				 
				 $sql = " select * from users where user_username = '$username' and user_password = '$password' ";
	             $query = $conn->query($sql);
				  
				  if($query->num_rows != 0){
			        	$row = $query->fetch_array();
				        $user_id = $row['user_id'];
                        $_SESSION['user_id'] = $user_id;
				        @header("location: ../user");
				   } 
				  else {
				        echo ' wrong username or password, try again later <a href="index.php">Click Here</a>';
				        exit();
				  }
				 
			}
			else {
			    echo ' Please select user type <a href="index.php">Click Here</a>';
				exit();
			}
}



?>