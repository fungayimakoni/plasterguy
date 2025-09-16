<?php

/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retroblocks
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( ! is_front_page() ) : ?>
		<header class="entry-header rounded-bl-[60px] ml-8 bg-[#08253A]">
			<div class="md:flex items-center relative md:min-h-[400px]">

				<div class="md:w-2/3 absolute left-0 top-0">
					
				</div>
				
				<div class="md:w-1/3 md:absolute right-0 top-0 bg-[#007ac2] h-full">
						<?php the_post_thumbnail('full', array('class' => 'h-full object-cover md:absolute left-0 top-0')); ?>
				</div>

				<div class="wrapper">
					<div class="max-w-2/3 mr-auto">
						<div class="py-8">
							<?php the_title( '<h1 class="entry-title text-white md:text-[50px] text-[40px] mb-2">', '</h1>' ); ?>
							
							<?php if( get_field( 'page_heading_intro' ) ): ?>
								<p class="text-white md:text-2xl"><?php the_field( 'page_heading_intro' ); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>

			</div>
		</header>
	<?php endif; ?>
	<!-- .entry-header -->


	

	<div <?php rwb_content_class('entry-content'); ?>>
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div>' . __('Pages:', 'rwb'),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if (get_edit_post_link()) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers. */
						__('Edit <span class="sr-only">%s</span>', 'rwb'),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				)
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->