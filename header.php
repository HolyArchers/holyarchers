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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="wrapper wrapper-header">
	<div class="container container-header">
		<div class="row middle-xs">
			<div class="col-xs-4">
				<h1 class="site-title">
					<?php bloginfo( 'name' ); ?>
				</h1>
			</div>
			<div class="col-xs-8">
				<nav id="site-navigation" class="main-navigation row end-xs" role="navigation">
					<?php wp_nav_menu( array(
																	'theme_location' => 'primary',
																	'depth' => 1,
																	'container' => false,
																	'menu_class' => 'row end-xs',
																	)
														); ?>
					<ul class="row">
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


	<div id="content" class="site-content container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

