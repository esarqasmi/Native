<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/admin/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>assets/admin/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> Admin Login</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?= base_url(); ?>assets/admin/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?= base_url(); ?>assets/admin/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url(); ?>assets/admin/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?= base_url(); ?>assets/admin/css/themify-icons.css" rel="stylesheet">
<style>
.login-form {
    float: none;
    margin: 10% auto 0;
}
</style>
</head>
<body>
<div class="container">
  <div class="col-sm-6 login-form">
<form action="<?= site_url('admin/login') ?>"  method="POST">
        <div class="row">
            
            <div class="col-md-12">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control border-input" placeholder="Username" name="user_name" value="">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="password" class="form-control border-input" name="user_password" placeholder="Password">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group"> 
                   <input type="submit" class="btn btn-default btn-block btn-lg" value="Login">
                </div>
            </div>
        </div>
 
    </form>

  </div>
</div>
</body>
</html>