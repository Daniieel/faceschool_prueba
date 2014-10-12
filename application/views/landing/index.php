<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?= base_url(); ?>template1/js/skel.min.js"></script>
		<script src="<?= base_url(); ?>template1/js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="<?= base_url(); ?>css/skel.css" />
			<link rel="stylesheet" href="<?= base_url(); ?>css/style.css" />
			<link rel="stylesheet" href="<?= base_url(); ?>css/style-wide.css" />
			<link rel="stylesheet" href="<?= base_url(); ?>css/style-noscript.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">
				

				<!-- Header -->
					<header id="header">
						<h1>Faceschool</h1>
						<h3><?= $usuarios->nombre ?></h3>
						<!-- formulario de busqueda -->
						<form action= "<?= base_url('colegio'); ?>">  
						<select style="color:black">
							<?php foreach ($colegios as $colegio) {
							?>
							<option value="<?= $colegio->id_colegio ?>"><?= $colegio->nombre ?></option>	
							<?php }

							 ?>
						</select>
						<input style="color:black" type="submit" value="Buscar">
						</form>	
						<p>El Buscador de Colegios</p>
						<nav>
							<ul>
								<li><a href="http://localhost/faceschool/menus/mapa.html" class="icon fa-map-marker"><span class="label">map-marker</span></a></li>
								<li><a href="http://localhost/faceschool/menus/index.html" class="icon fa-book"><span class="label">book</span></a></li>
								<li><a href="https://www.facebook.com/pages/Faceschool/1454526578163013" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="https://twitter.com/Faceschool_" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							</ul>
							
						</nav>
					</header>





				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Daniel Labra - Fernando Figueroa <a href="http://html5up.net"></a>.</span>
					</footer>
				
			</div>
		</div>
	</body>
</html>