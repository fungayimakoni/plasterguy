<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retroblocks
 */

?>

<button class="scrollToTopBtn">☝️</button>


<footer id="colophon" class="mt-auto md:ml-8 ml-4">
	<div class="footer-top relative bg-[#ABB8C3] pt-12 pb-8 mt-12 rounded-tl-[60px] bg-cover bg-no-repeat bg-bottom")>
		<div class="wrapper">
			<div class="flex gap-4 lg:flex-nowrap flex-wrap">
				<div class="md:w-[40%]">
					<h2 class="capitalize mb-0"><?php the_field( 'fc_title', 'option' ); ?></h2>
				</div>
				<div class="">
					<?php the_field( 'fc_description', 'option' ); ?>
				</div>
				<?php $fcta_button = get_field( 'fcta_button', 'option' ); ?>
				<?php if ( $fcta_button ) : ?>
					<div class="flex-1">
						<a href="<?php echo esc_url( $fcta_button['url'] ); ?>" target="<?php echo esc_attr( $fcta_button['target'] ); ?>" class="rw-button !inline-block !mt-0"><?php echo esc_html( $fcta_button['title'] ); ?></a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="pt-12 bg-[#08253A] text-white">
		<div class="wrapper border-b flex gap-12">
			<div class="pb-6 flex flex-col justify-center">
				<div class="flex md:flex-row flex-col md:items-center justify-between gap-6">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="block">
						<?php
							if (function_exists('the_custom_logo')) {
								the_custom_logo();
							}
						?>
					</a>

					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'footer-menu md:flex gap-6 text-xl', // <- your custom ul classes
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					));
					?>
				</div>

				<div class="text-white mt-4 hidden md:block">
					<p class="text-sm">
						&copy; Copyright <?php echo date("Y") . ' ' . get_bloginfo( 'name' ); ?>
					</p>
				</div>
			</div>
		
		</div>

		<div class="flex justify-between py-6 gap-4">
			<div class="wrapper flex gap-4">
				<div class="flex gap-4 text-lg">
					<a href="">Cookie Policy</a>
					<span>/</span>
					<a href="">Privacy Policy</a>
				</div>
			</div>
		</div>
		<div class="text-white pb-4 px-6 block md:hidden">
			<p class="text-sm">
				&copy; Copyright <?php echo date("Y") . ' ' . get_bloginfo( 'name' ); ?>
			</p>
		</div>
	</div>
</footer><!-- #colophon -->