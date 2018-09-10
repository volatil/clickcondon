<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<meta name="title" content="ClickCondon.com | Placer & Seguridad" />
	<meta name="keywords" content="ClickCondon, condones, condones variedad, baratos" />
	<meta name="description" content="La cantidad y variedad que tu quieres de la forma mas facil. ClickCondon, condones, condones variedad, baratos" />

	<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/icons/favicon.png">
	<link rel="icon" sizes="16x16 32x32 64x64" href="<?php bloginfo( 'template_url' ); ?>/images/icons/favicon.png">
	<link rel="icon" type="image/png" sizes="196x196" href="<?php bloginfo( 'template_url' ); ?>/images/icons/196x196.png">
	<link rel="icon" type="image/png" sizes="160x160" href="<?php bloginfo( 'template_url' ); ?>/images/icons/160x160.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'template_url' ); ?>/images/icons/96x96.png">
	<link rel="icon" type="image/png" sizes="64x64" href="<?php bloginfo( 'template_url' ); ?>/images/icons/64x64.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/images/icons/32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/images/icons/16x16.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/images/icons/152x152.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/images/icons/144x144.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_url' ); ?>/images/icons/120x120.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/images/icons/114x114.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_url' ); ?>/images/icons/76x76.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/images/icons/72x72.png">
	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/icons/57x57.png">
	<meta name="msapplication-TileColor" content="#028f6f">
	<meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/images/icons/144x144.png">

	<meta property="og:title" content="ClickCondon.com | Placer & Seguridad"/>
	<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/images/icons/250x250.png"/>
	<meta property="og:site_name" content="ClickCondon.com | Placer & Seguridad"/>
	<meta property="og:description" content="La cantidad y variedad que tu quieres de la forma mas facil."/>	
	<meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>" />
	<meta property="fb:admins" content="1092915589" />
	
	<meta name="twitter:card" content="product">
	<meta name="twitter:site" content="@ClickCondonLA">
	<meta name="twitter:description" content="La cantidad y variedad que tu quieres de la forma mas facil.">
	<meta name="twitter:title" content="Placer & Seguridad | #ClickCondon">
	<meta name="twitter:creator" content="@ClickCondonLA">
	<meta name="twitter:image:src" content="<?php bloginfo( 'template_url' ); ?>/images/icons/250x250.png">
	
	<meta itemprop="name" content="ClickCondon.com | Placer & Seguridad" />
	<meta itemprop="description" content="La cantidad y variedad que tu quieres de la forma mas facil." />
	<meta itemprop="image" content="<?php bloginfo( 'template_url' ); ?>/images/icons/250x250.png" />
	
	<?php wp_head(); ?>
	<link rel='stylesheet' href='<?php bloginfo( 'template_url' ); ?>/css/main.min.css' type='text/css' media='all' />
	<link rel='stylesheet' href='<?php bloginfo( 'template_url' ); ?>/css/responsive.min.css' type='text/css' media='all' />

</head>

<body <?php body_class(); ?> data-twttr-rendered="true">

<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
		</a>
	</div>
	<?php endif; ?>

	<header>
		<!-- LOGO -->
		<div class='logo'>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php // bloginfo( 'name' ); ?>
				<img src="<?php bloginfo('template_url'); ?>/images/logo2.png" alt='CLICK CONDON'>
			</a>
		</div>
		<!-- /LOGO -->
		<!-- MENU -->
		<nav>
			<div class='menuMobile'>
				<span>=</span>
			</div>
			<?php wp_nav_menu(); ?>
			<div class='carroCompra'>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>/carro-de-compra/">
					<span class='cantidad'><?php echo wpsc_cart_item_count(); ?></span>
					<span class='sprite'></span>
				</a>
			</div>
		</nav>
		<!-- /MENU -->
		<!-- BUSCADOR -->
		<div class='buscador'>
			<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
				<fieldset>
					<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder='¿ QUE BUSCAS ?' />
					<button><span class='sprite'></span>BUSCAR</button>
				</fieldset>
			</form>
		</div>
		<!-- /BUSCADOR -->
	</header>

	<div id="main" class="site-main">
