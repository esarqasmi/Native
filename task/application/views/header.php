<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Realestate Bootstrap Theme </title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 	<link rel="stylesheet" href="<?= base_url(); ?>assets/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/style.css"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.js"></script>
  <script src="<?= base_url(); ?>assets/script.js"></script>



<!-- Owl stylesheet -->
<link rel="stylesheet" href="<?= base_url(); ?>assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/owl-carousel/owl.theme.css">
<script src="<?= base_url(); ?>assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="<?= base_url(); ?>assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/slitslider/js/jquery.slitslider.js"></script>
<!-- slitslider -->

</head>

<body>


<!-- Header Starts -->
<div class="navbar-wrapper">

        <div class="navbar-inverse" role="navigation">
          <div class="container">
            <div class="navbar-header">


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
               <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
                <li><a href="#about">About</a></li> 
                <li><a href="<?= site_url('contact') ?>">Inquire with us</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

    </div>
<!-- #Header Starts -->





<div class="container">

<!-- Header Starts -->
<div class="header">
<a href="index.php"><img src="<?= base_url(); ?>assets/images/logo.png" alt="Realestate"></a>

              <ul class="pull-right">
                <li><a href="<?= site_url('contact') ?>">Broker Registration</a></li> 
              </ul>
</div>
<!-- #Header Starts -->
</div>