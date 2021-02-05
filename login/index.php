<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Log in page</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" id="form1" name="form1" method="post" action="admin_script.php">
      <div class="login-wrap">
        <h3 class="page-header"><center>
          <h2><span class="style1"><span class="fa  fa-lock"> </span> Account </span> <span class="style2">login</span></h2>
          </center>
        </h3>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input name="password" type="password" class="form-control" placeholder="Password" required>
        </div>
		<div class="input-group">
		  <select name="usertype"  class="form-control">
	      <option value="">User Type</option>
          <option value="admin">Admin</option>
          <option value="user">User</option>
          </select>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button><p>
      </div>
     </form>
    <div class="text-right">
 
    </div>
  </div>


</body>

</html>
