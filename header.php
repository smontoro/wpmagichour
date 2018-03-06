<!DOCTYPE html>
<html <?php language_attributes(); ?>">
<head>
	<meta charset= "<?php bloginfo('charset')?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">


<div class="container-fluid bg-blue">

	<div class="container-fluid fixed-top" id="nav-container">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand py-3 text-center" href="<?php echo site_url('/about-us'); ?>">BH</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			    	<?php wp_nav_menu(array(
			    			'theme-location' => 'top-navigation'
			    		)); ?>


			    <!--  <li class="nav-item">
			        <a class="nav-link" href="#">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Services</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo site_url('/about-us'); ?>">About Us</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Contact</a>
			      </li>-->
			    </ul>
			  </div>
			</nav>
		</div>
	</div>