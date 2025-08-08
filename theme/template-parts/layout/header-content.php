<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retroblocks
 */

?>

<header id="masthead" class="fixed top-0 left-0 z-999 w-full">
	<div class="wrapperx">
		<div class="flex justify-between items-center">
			<div class="w-1/3">
				<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'rwb'); ?>">
					<button class="hidden" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'rwb'); ?></button>

					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'main-menu flex gap-4 uppercase font-bold text-white', // <- your custom ul classes
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					));
					?>

				</nav><!-- #site-navigation -->
			</div>

			<div id="site-logo">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php
					if (function_exists('the_custom_logo')) {
						the_custom_logo();
					}
					?>
				</a>
			</div>

			<div class="w-1/3"></div>
		</div>
	</div>
</header><!-- #masthead -->