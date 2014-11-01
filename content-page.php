<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package holyarchers
 */
?>
<div class="box box-main">
	<article>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'holyarchers' ),
				'after'  => '</div>',
			) );
		?>
		<footer class="entry-footer">
			<?php edit_post_link( __( 'Edit', 'holyarchers' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>
