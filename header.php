<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?> <!--hookable-->
	</head>
	
<body <?php body_class(); ?>>
	
	<div class="container">
	
		<!-- site-header -->
		<header class="site-header">
			<!-- need a logo, about 40% then float left nav, replace name with the logo, or float desc. an oppt... -->
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5>
		</header><!-- /site-header -->