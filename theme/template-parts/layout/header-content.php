<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retroblocks
 */

?>

<script src="//unpkg.com/alpinejs" defer></script>

<header id="masthead" class="fixed top-0 left-0 z-999 w-full transition-all transition-discrete">
	<div class="wrapper">
		<div class="flex justify-between items-center">
			<div id="site-logo" class="md:w-1/3">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php
					if (function_exists('the_custom_logo')) {
						the_custom_logo();
					}
					?>
				</a>
			</div>

			<div class="md:w-2/3">
				<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'rwb'); ?>">
					<div x-data="{ open: false }" class="z-10 flex-1">
						<!-- overlay -->
						<div 
							x-cloak
							x-show="open" 
							@click="open = false" 
							class="fixed inset-0 bg-black/50 z-30 md:hidden"
							x-transition:enter="transition ease-out duration-300"
							x-transition:enter-start="opacity-0"
							x-transition:enter-end="opacity-100"
							x-transition:leave="transition ease-in duration-200"
							x-transition:leave-start="opacity-100"
							x-transition:leave-end="opacity-0"
						></div>

						<!-- menu -->
						<div :class="{ 'flex' : open, 'hidden' : open === false }" class="fixed md:relative top-0 left-0 w-full md:w-auto md:h-auto md:flex flex-col md:flex-row items-end justify-center z-40 bg-gray-200 md:bg-transparent leading-loose md:text-sm text-4xl text-gray-800 tracking-wider gap-8 hidden md:p-0 pt-20 pb-12 pr-8">
							<?php
							wp_nav_menu(array(
								'theme_location' => 'menu-1',
								'menu_class'     => 'main-menu md:flex gap-4 md:text-lg text-2xl md:text-start font-bold md:font-semibold text-end', // <- your custom ul classes
								'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
							));
							?>
						</div>

						<!-- open button -->
						<button @click="open = true" 
							type="button" 
							:class="{ 'hidden' : open, 'block' : !open }" 
							class="block md:hidden text-4xl font-thin">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="40" height="40"><!--!Font Awesome Free v7.0.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#212121" d="M96 160C96 142.3 110.3 128 128 128L512 128C529.7 128 544 142.3 544 160C544 177.7 529.7 192 512 192L128 192C110.3 192 96 177.7 96 160zM96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320zM544 480C544 497.7 529.7 512 512 512L128 512C110.3 512 96 497.7 96 480C96 462.3 110.3 448 128 448L512 448C529.7 448 544 462.3 544 480z"/></svg>
						</button>

						<!-- close button -->
						<button 
							@click="open = false" 
							type="button" 
							:class="{ 'block' : open, 'hidden' : !open }" 
							class="md:hidden absolute top-0 right-0 leading-none p-8 text-xl z-50 hidden text-[#f31010]">╳</button>
					</div>
				</nav><!-- #site-navigation -->
			</div>
			
		</div>
	</div>
</header><!-- #masthead -->