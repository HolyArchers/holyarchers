<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package holyarchers
 */
?>

<article id="post-<?php the_ID(); ?>" class="typography">
	<header class="entry__header">
		<?php the_title( sprintf( '<h1 class="entry__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php holyarchers_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry__header -->

	<div class="entry__summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry__summary -->

	<footer class="entry__footer">
		<?php holyarchers_entry_footer(); ?>
	</footer><!-- .entry__footer -->
</article><!-- #post-## -->
