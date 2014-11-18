<?php
/**
 * @package holyarchers
 */
?>
<div class="box box-main">
	<article id="post-<?php the_ID(); ?>" class="typography">
		<header class="entry__header">
			<div class="entry__date">
				<?php the_time('l, F jS, Y') ?>
			</div><!-- .entry-meta -->
			<?php the_title( '<h1 class="entry__title">', '</h1>' ); ?>
		</header><!-- .entry__header -->

		<div class="entry__content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'holyarchers' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry__content -->

		<footer class="entry__footer">
			<?php holyarchers_entry_footer(); ?>
			<?php holyarchers_post_nav(); ?>
		</footer><!-- .entry__footer -->
	</article><!-- #post-## -->
</div>
