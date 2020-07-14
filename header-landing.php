<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" >

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel='dns-prefetch' href='//fonts.googleapis.com'/>

  <title>Hublearn - Transforming Lives</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <?php echo wp_site_icon()?>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Landing Name: HubLearn - v1.0.0
  * Landing URL: https://hublearn.com/
  * Author: HubLearn
  * License: http://www.gnu.org/licenses/gpl-2.0.html
  ======================================================== -->



</head>
	<body>
		<!-- ======= Header ======= -->
	    <header id="header" class="fixed-top">
	      <div class="container d-flex">

	        <div class="logo mr-auto">
	          <!-- <h1 class="text-light"><a href="#"><span>Hublearn</span></a></h1> -->
	          <!-- Uncomment below if you prefer to use an image logo -->
	          <a href="<?php echo get_home_url(); ?>"><img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Logo-Black-HubLearn.png" alt="HubLearn" class="img-fluid lazyload"></a>
	        </div>

	        <nav class="nav-menu d-none d-lg-block">
	          <ul>
	            <li class="drop-down"><a href="<?php echo get_home_url(); ?>/about">About</a>
	              <ul>
	                <li class="drop-down"><a href="<?php echo get_home_url(); ?>/about">About - What is HubLearn ?</a>
                        <ul>
      	                    <li><a href="<?php echo get_home_url(); ?>/making-of-a-dream">Making of a dream</a></li>
      	                    <li><a href="<?php echo get_home_url(); ?>/social-enterprise">What is a social enterprise ?</a></li>
      	                    <li><a href="<?php echo get_home_url(); ?>/how-hublearn-works">How HubLearn works ?</a></li>
  	                    </ul>
                    </li>
	                <li><a href="<?php echo get_home_url(); ?>/why">Why We do What We Do ?</a></li>
	                <li><a href="<?php echo get_home_url(); ?>/mission-vision-values">Mission Vision Values</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/un-world-goals">UN & HubLearn</a></li>
                    <li><a href="<?php echo get_home_url(); ?>/hall-of-fame">Hall of Fame</a></li>
	              </ul>
	            </li>
	            <li class="drop-down"><a href="<?php echo get_home_url(); ?>/services">Services</a>
                    <ul>
                        <li><a href="<?php echo get_home_url(); ?>/shopbylocals-info">Shop by Locals</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/vr-services">Virtual Relality Services</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo get_home_url(); ?>/careers">Careers</a></li>
	            <li><a href="<?php echo get_home_url(); ?>/contact">Contact</a></li>

	          </ul>
		  </nav>

	        <div class="header-social-links">
				<a href="https://www.linkedin.com/company/hublearn" target="_blank" class="linkedin"><i class="icofont-linkedin"></i></a>
				<a href="https://www.facebook.com/hublearn" target="_blank" class="facebook"><i class="icofont-facebook"></i></a>
				<a href="https://www.instagram.com/hublearn" target="_blank" class="instagram"><i class="icofont-instagram"></i></a>
	          	<a href="https://twitter.com/hublearn_com" target="_blank" class="twitter"><i class="icofont-twitter"></i></a>
			  	<a href="https://www.youtube.com/hublearn" target="_blank" class="youtube"><i class="icofont-youtube"></i></i></a>
	        </div>

	      </div>
	    </header><!-- End Header -->
