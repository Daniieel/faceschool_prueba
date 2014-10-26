<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Faceschool</title>
<!-- Bootstrap -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="<?= base_url(); ?>css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="<?= base_url(); ?>css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="<?= base_url() ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/bootstrap.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="<?= base_url(); ?>css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?= base_url() ?>js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="<?= base_url() ?>js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="<?= base_url(); ?>css/owl.carousel.css" rel="stylesheet">
<script src="<?= base_url() ?>js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>

   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">

</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="row header">
		<div class="col-md-4">
			<div class="logo navbar-left">
			<h1><a href="<?= base_url() ?>">faceschool </a></h1>
		</div>
		</div>
		<div class="col-md-8">
			<div class="pull-right">
			<a class="btn btn-danger btn-sm" href="<?= base_url('administracion/login') ?>"><i class="fa fa-user"></i> Login Administración</a>
		</div>
		</div>
		<div class="clearfix"></div>
		
	</div>
</div>
</div>
<div class="container">
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="<?= base_url() ?>">Inicio</a></li>
		        <li><a href="<?= base_url() ?>mapa">Mapa</a></li>
		        <!--<li><a href="<?= base_url() ?>informacion">Informacion</a></li>-->
		        <!--<li><a href="<?= base_url() ?>libro_clases">Libro de Clases</a></li>-->
		        <li><a href="contact.html">Contactanos</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="https://twitter.com/faceschool_"><i class="fa fa-twitter"></i></a></li>
				<li><a href="https://www.facebook.com/pages/Faceschool/1454526578163013"><i class="fa fa-facebook"></i></a></li>
				<!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
				<!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
				<!--<li><a href="#"><i class="fa fa-linkedin"></i></a></li>-->
			</ul>	
		</div>
	</div>
</div>