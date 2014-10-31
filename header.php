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
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<script src="//use.typekit.net/wsx3fln.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="search-bar">
	<form role="search" method="get" action="<?php echo get_site_url(); ?>">
		<input type="text" name="s" />
	</form>
</div>
<div class="wrapper wrapper-header">
	<div class="container container-header">
		<div class="row middle-xs">
			<div class="col-xs-12 cf">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<h1 class="site-title pull-left">
						<a href="<?php bloginfo('url');?>">
							<img src="<?php echo get_template_directory_uri() . "/img/ha-badge.svg"; ?>" onerror="this.onerror=null; this.src='image.png'" /><?php bloginfo( 'name' ); ?>
						</a>
					</h1>

					<?php wp_nav_menu( array(
																	'theme_location' => 'primary',
																	'depth' => 1,
																	'container' => false,
																	'menu_class' => 'pages-nav pull-left',
																	)
														); ?>
					<ul class="pull-right">
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
						<li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</div>


	<div id="content" class="site-content container">
		<div class="row">
			<div class="col-xs-12">
