<?php include('restriction.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>user account</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    <style type="text/css">
<!--
.style1 {
	color: #0000FF;
	font-size: 18px;
	font-weight: bold;
}
.style2 {color: #FF0000}
-->
    </style>
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
  
    <!--header start-->
    <?php include 'header.php'; ?>
    <!--header end-->

    <!--sidebar start-->
    <?php include 'sidebar.php'; ?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
         <div class="col-lg-12">
          <h3 class="page-header"><i class=""></i> Manage Loans</h3>
          <ol class="breadcrumb">
           <li><i class="fa fa-home"></i><a href="index.php">user</a></li>
           <li><i class=""></i>Loans</li>
         </ol>
       </div>
     </div>
   </div>
   <!-- page start-->
   <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
        <h4 style="color:#000000" class="panel-title">Request new Loan</h4>
        <p><a class="btn btn-success" href="#add" data-toggle="modal"><span class="fa fa-plus-square"></span> Request</a></p>

      </header>
      <div class="table-responsive">
        <table width="101%" class="table">
          <thead>
            <tr>
              <th><i class=""></i> Loan Type</th>
			  <th><i class=""></i> Payment Method</th>
			  <th><i class=""></i> Total Rate/Month</th>
              <th><i class=""></i> Loan amount</th>
			  <th><i class=""></i> Total Payment</th>
              <th><i class=""></i> Loan status</th>
			   <th><i class=""></i> Date Accepted</th>
			    <th><i class="icon_cogs"></i> Action</th>
            </tr>
          </thead>
          <tbody> 
<!-- ############################################## responsive table design -->

              <?php
	         include('../conn.php');
			 $id = $_SESSION['user_id'];
		     $sql = "select * from user_loans where user_loan_userid = '$id'";
	         $query = $conn->query($sql);
		 while($row = $query->fetch_array()){
			 $type = $row['user_loan_type_id'];
			 $pay_m = $row['user_loan_payment_method_id'];
			   ?>
            <tr>
			  <?php 
			  
			  $s = "select * from loan_types where loan_type_id = '$type'";
	          $q = $conn->query($s);
			  $r = $q->fetch_array();
			  
			  $s5 = "select * from payment_method where payment_method_id = '$pay_m'";
	          $q5 = $conn->query($s5);
			  $r5 = $q5->fetch_array();
			  
			 ?>
              <td><?php echo $r['loan_type_name']; ?></td>
			  <td><?php echo $r5['payment_method_type']; ?></td>
			  <td><?php echo $total = $r['loan_type_rate'] + $r5['payment_method_rate']; ?> % </td>
			  <td>&#8369; <?php echo $row['user_loan_amount']; ?></td>
			  <td>  <span class="style2"> <span class="style2">&#8369; <?php echo ( $total / 100 ) * $row['user_loan_amount'] + $row['user_loan_amount']; ?></span> </span></td>
			  <td> <span class="style1"><?php echo $row['user_loan_status']; ?></span></td>
			   <td> <?php echo $row['user_loan_accepted_date']; ?></td>
              <td>
               <div class="btn-group">
                <a class="btn btn-primary" data-toggle="dropdown" href="" title="Bootstrap 3 themes generator"><span class="fa fa-pencil-square-o"></span> Edit</a>
                <ul class="dropdown-menu">
                  <li><a href="loan_script.php?del=<?php echo $row['user_loan_id']; ?>" data-toggle="modal" >Cancel Request</a></li>
                </ul>
              </div>
            </td>
          </tr>
<?php 
           }
		          
		     
  ?>
<!-- ################################################### end -->
       
        </tbody>
      </table>
    </div>
	
	<!-- add -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Request New Loan</h4>
      </div>
      <div class="modal-body">

       <!-- ############## -->
       
       <form id="form1" name="form3" method="post" action="loan_script.php" enctype="multipart/form-data">
	    <div class="form-group">
         <input type="hidden" name="id"  value="<?php echo  $_SESSION['user_id']; ?>" class="form-control" id="exampleInputEmail1" required>
       </div>
       <div class="form-group">
         <label for="exampleInputEmail1">Loan Type</label>
		 <select  name="loan_type" class="form-control">
		 <?php
		 $sql = "select * from loan_types";
	     $query = $conn->query($sql);
	     while ( $row = $query->fetch_array()){
		 ?>
		 <option value="<?php echo $row['loan_type_id'];?>"><?php echo $row['loan_type_name'];?></option> 
	     <?php
		 }
		 ?>
		 </select>
       </div>
	   <div class="form-group">
         <label for="exampleInputEmail1">Payment Method</label>
		 <select  name="payment_type" class="form-control">
		 <?php
		 $sql = "select * from payment_method";
	     $query = $conn->query($sql);
	     while ( $row = $query->fetch_array()){
		 ?>
		 <option value="<?php echo $row['payment_method_id'];?>"><?php echo $row['payment_method_type'];?></option> 
	     <?php
		 }
		 ?>
		 </select>
       </div>
       <div class="form-group">
         <label for="exampleInputPassword1">Loan Amount</label>
		  <?php
		  $user_id = $_SESSION['user_id'];
		 $sql = "select * from users where user_id = '$user_id'";
	     $query = $conn->query($sql);
	     $row = $query->fetch_array();
		 ?>
		 <input type="hidden" name="user_attach_name" value="<?php echo $row['user_firstname']; ?>_<?php echo $row['user_lastname']; ?>" class="form-control" id="exampleInputPassword1" placeholder="50000" required>
		 
         <input type="text" name="loan_amount" value="" class="form-control" id="exampleInputPassword1" placeholder="50000" required>
       </div>
	   <div class="form-group">
         <label for="exampleInputPassword1">Attachment</label>
		 <input type="file" name="attach_ment">
       </div>
       <input type="submit" name="add" value="submit" class="btn btn-primary">
     </form>
     
     <!-- bodyyyyyyyyyyyy///// -->
   </div>
   <div class="modal-footer">
    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
  </div>
</div>
</div>
</div>
	
  </section>
</div>

<!-- page end-->
</section>
</section>
<!--main content end-->
   
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
