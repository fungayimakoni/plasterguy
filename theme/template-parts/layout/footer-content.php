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

<footer id="colophon" class="mt-auto bg-[#F9EEDD] py-6">
	<div class="wrapper">
		<div class="flex border-b pb-6">
			<div class="id_col w-1/3">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home" class="block mb-4">
					<?php
					if (function_exists('the_custom_logo')) {
						the_custom_logo();
					}
					?>
				</a>
				<p>
					Lorem ipsum dolor sit, amet consectetur adipisicing elit.
					Lorem ipsum dolor sit, amet consectetur adipisicing elit.
				</p>
			</div>



			<?php if (has_nav_menu('menu-2')) : ?>
				<nav aria-label="<?php esc_attr_e('Footer Menu', 'rwb'); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav>
			<?php endif; ?>
		</div>

		<div class="flex justify-between pt-4">
			<div class="">
				<?php bloginfo('name'); ?> - Copyright <?php echo date('Y'); ?>
			</div>
			<div class="flex">
				<a href="">Cookie Policy</a>
				<a href="">Privacy Policy</a>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->