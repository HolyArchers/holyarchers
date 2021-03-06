<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package holyarchers
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<script src="//use.typekit.net/wsx3fln.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-160x160.png" sizes="160x160">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
<meta name="msapplication-TileColor" content="#efefef">
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/mstile-144x144.png">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="search-bar">
	<form role="search" method="get" autocomplete="off" action="<?php echo get_site_url(); ?>">
		<input type="text" name="s" />
	</form>
</div>
<div id="mobile-menu" class="menu-hide">
	<div class="close"><a href="#" class="close-menu"><i class="fa fa-times"></i></a></div>
	<ul class="menu-social"></ul>
	<ul class="menu-pages"></ul>
</div>
<div class="wrapper wrapper-header" role="banner">
	<div class="container container-header">
		<div class="row middle-xs">
			<div class="col-xs-12 cf">
				<nav id="site-navigation" class="navigation__main" role="navigation">
					<h1 class="site-title pull-left">
						<a href="<?php bloginfo('url');?>">
							<img alt="Holy Archers Crest" src="<?php echo get_template_directory_uri() . "/img/ha-badge.svg"; ?>" onerror="this.onerror=null; this.src='image.png'" /><?php bloginfo( 'name' ); ?>
						</a>
					</h1>

					<?php wp_nav_menu( array(
																	'theme_location' => 'primary',
																	'depth' => 1,
																	'container' => false,
																	'menu_class' => 'pages-nav pull-left hide-mobile',
																	'menu_id' => 'menu-pages'
																	)
														); ?>
					<ul class="pull-right">
						<li class="only-mobile menu-btn"><a href="#" id="show-menu"><i class="fa fa-bars"></i> Menu</a></li>
						<li class="search search-btn"><a href="#"><i class="fa fa-search"></i></a></li>
					</ul>
					<ul class="pull-right hide-mobile" id="menu-social">
						<?php if( of_get_option('twitter_url') ):  ?>
							<li><a href="<?php echo of_get_option('twitter_url'); ?>"><i class="fa fa-twitter"></i></a></li>
						<?php endif; ?>
						<?php if( of_get_option('facebook_url') ):  ?>
							<li><a href="<?php echo of_get_option('facebook_url'); ?>"><i class="fa fa-facebook"></i></a></li>
						<?php endif; ?>
						<?php if( of_get_option('linkedin_url') ):  ?>
							<li><a href="<?php echo of_get_option('linkedin_url'); ?>"><i class="fa fa-linkedin"></i></a></li>
						<?php endif; ?>
						<?php if( of_get_option('github_url') ):  ?>
							<li><a href="<?php echo of_get_option('github_url'); ?>"><i class="fa fa-github"></i></a></li>
						<?php endif; ?>
						<?php if( of_get_option('dribbble_url') ):  ?>
							<li><a href="<?php echo of_get_option('dribbble_url'); ?>"><i class="fa fa-dribbble"></i></a></li>
						<?php endif; ?>
						<?php if( of_get_option('google_url') ):  ?>
							<li><a href="<?php echo of_get_option('google_url'); ?>"><i class="fa fa-google-plus"></i></a></li>
						<?php endif; ?>
						<?php if( of_get_option('instagram_url') ):  ?>
							<li><a href="<?php echo of_get_option('instagram_url'); ?>"><i class="fa fa-instagram"></i></a></li>
						<?php endif; ?>
						<?php if( of_get_option('rdio_url') ):  ?>
							<li><a href="<?php echo of_get_option('rdio_url'); ?>"><i class="fa fa-spotify"></i></a></li>
						<?php endif; ?>
						<?php if( of_get_option('spotify_url') ):  ?>
							<li><a href="<?php echo of_get_option('spotify_url'); ?>"><i class="fa fa-spotify"></i></a></li>
						<?php endif; ?>

					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>


	<div id="content" class="typography container" role="main">
		<div class="row">
			<div class="col-xs-12">
