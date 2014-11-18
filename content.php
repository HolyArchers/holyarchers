<?php
/**
 * @package holyarchers
 */
?>

<article id="post-<?php the_ID(); ?>" class="typography">
	<header class="entry__header">
		<div class="entry__date">
			<?php echo get_the_date(); ?>
		</div><!-- .entry-meta -->
		<?php the_title( sprintf( '<h1 class="entry__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>

		<?php endif; ?>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<a href="<?php echo esc_url( get_permalink() ); ?>" class="btn">Read More</a>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
