<?php  
 if ($this->session->userdata('_is_logged_in')!==1) { 
  redirect('admin/Login');
 
}  
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>assets/admin/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url(); ?>assets/admin/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin panel</title>

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

</head>
<body>

<div class="wrapper">
   		<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?= site_url() ?>" class="simple-text">
                    Visit Site
                </a>
            </div>

            <ul class="nav">
                <li class=" ">
                    <a href="<?= site_url('admin/dashboard') ?>">
                        <i class="ti-user"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="">
                    <a href="<?= site_url('admin/Testimonials') ?>">
                        <i class="ti-panel"></i>
                        <p>Testimonials</p>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('admin/messages') ?>">
                        <i class="ti-user"></i>
                        <p>Messages</p>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('admin/team') ?>">
                        <i class="ti-view-list-alt"></i>
                        <p>Team Members</p>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('admin/projects') ?>">
                        <i class="ti-text"></i>
                        <p>Projects</p>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('admin/map') ?>">
                        <i class="ti-pencil-alt2"></i>
                        <p>Map</p>
                    </a>
                </li>  
				<li class="active-pro">
                    <a href="<?= site_url('admin/Login/logout') ?>">
                        <i class="fa fa-power-off"></i>
                        <p> Log Out  </p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="<?= site_url('admin/dashboard') ?>">Dashboard</a>
                </div>
                 
            </div>
        </nav>


      
