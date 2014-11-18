<?php
/**
 * @package holyarchers
 */
?>
<div class="box box-main">
	<article id="post-<?php the_ID(); ?>" class="site-content">
		<header class="entry-header">
			<div class="entry-date">
				<?php the_time('l, F jS, Y') ?>
			</div><!-- .entry-meta -->
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'holyarchers' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php holyarchers_entry_footer(); ?>
			<?php holyarchers_post_nav(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
