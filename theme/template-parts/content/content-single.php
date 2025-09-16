<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retroblocks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="max-w-[920px] mx-auto">
		<header class="entry-header max-w-[920px] mx-auto py-20">
			<?php the_title( '<h1 class="entry-title md:text-[50px] text-[30px] leading-[1.1] font-extrabold uppercase mt-2 text-center">', '</h1>' ); ?>

			<?php if ( ! is_page() ) : ?>
				<div class="entry-meta text-center">
					<?php rwb_entry_meta(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<?php rwb_post_thumbnail(); ?>

		<div <?php rwb_content_class( 'entry-content py-20' ); ?>>
			<?php
			the_content(
				// sprintf(
				// 	wp_kses(
				// 		/* translators: %s: Name of current post. Only visible to screen readers. */
				// 		__( 'Continue reading<span class="sr-only"> "%s"</span>', 'rwb' ),
				// 		array(
				// 			'span' => array(
				// 				'class' => array(),
				// 			),
				// 		)
				// 	),
				// 	get_the_title()
				// )
			);

			// wp_link_pages(
			// 	array(
			// 		'before' => '<div>' . __( 'Pages:', 'rwb' ),
			// 		'after'  => '</div>',
			// 	)
			// );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php //rwb_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-${ID} -->
