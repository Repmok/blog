<!DOCTYPE html>
<html lang="<?php echo pll_current_language()?>">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="description" content=""/>
		<meta name="viewport" content="width=device-width"/>

		<title><?php bloginfo('title')?></title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/ticompare.js"></script>
		<?php wp_head()?>
	</head>
	<body <?php body_class(); ?>>
		<div id="page-wrapper">
			<div id="page">
				<header class="page-row">
					<div class="top edge left">
						<figure id="logo">
							<a href="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-mobile.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>"/></a>
						</figure>
					</div>
					<div class="top center">
						<h1><?php bloginfo('description')?></h1>
					</div>
					<div class="top edge right">
						<figure id="options">
							<a href="<?php echo $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>"><img src="<?php bloginfo('template_directory'); ?>/images/lang-icon.png" alt="<?php bloginfo('name')?>" title="<?php bloginfo('name')?>"/></a>
						</figure>
					</div>
					<nav class="hide">
						<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'side' ) ); ?>
					</nav>
				</header>