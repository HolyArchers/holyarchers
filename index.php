<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package holyarchers
 */

get_header(); ?>
<div class="box box-main">
	<div class="wrapper wrapper-content">
		<div class="container container-content">
			<?php
				$args = array(
					'order'    => 'desc',
					'orderby' => 'date'
				);
			?>
			<?php $the_query = new WP_Query( $args ); ?>
			<?php if ( $the_query->have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<?php if (!empty($post->post_password)) { continue; } ?>
					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php holyarchers_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

		</div>
	</div>
</div>
<?php get_footer(); ?>
