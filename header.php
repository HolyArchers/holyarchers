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
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array(
																	'theme_location' => 'primary',
																	'depth' => 1,
																	'container' => false,
																	'menu_class' => 'row end-xs',
																	)
														); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</div>
</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
