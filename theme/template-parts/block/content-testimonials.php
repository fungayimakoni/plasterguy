<?php

/**
 * Block template file: Testimonials
 *
 * Testimonials Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'testimonials-' . $block['id'];
if (! empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-testimonials';
if (! empty($block['className'])) {
    $classes .= ' ' . $block['className'];
}
if (! empty($block['align'])) {
    $classes .= ' align' . $block['align'];
}

$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>


<section id="<?php echo $id; ?>" class="pb-32">
    <div class="wrapper">
        <div class="md:grid grid-cols-4 flex flex-col-reverse gap-y-6">
            <div class="flex gap-6 flex-col">
                <a href="https://www.google.com/search?q=theplasterguy&rlz=1C1JJTC_enZA1148ZA1148&oq=theplasterguy&gs_lcrp=EgZjaHJvbWUqBggAEEUYOzIGCAAQRRg7MgYIARBFGDwyCggCEAAYogQYiQUyBwgDEAAY7wUyCggEEAAYgAQYogQyCggFEAAYgAQYogQyBggGEEUYPNIBCDQ5NzFqMGoxqAIAsAIA&sourceid=chrome&ie=UTF-8#" class="no-underline !text-[#404040]">
                    <!-- <svg aria-hidden="true" focusable="false" data-prefix="fass" data-icon="star-sharp" class="svg-inline--fa fa-star-sharp sc-d585af5e-1 kpKuOC" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" color="#5E257A" width="1rem" fill="currentColor" style="width: 1rem; height: 1rem;">
                    <path fill="currentColor" d="M288.1 0l63.5 195.6H557.2L390.9 316.4 454.4 512 288.1 391.1 121.7 512l63.5-195.6L18.9 195.6H224.5L288.1 0z"></path>
                </svg> -->
                    <div class="flex items-center gap-2">
                        <span class="block font-bold text-5xl leading-[1.3]">5/5</span>
                        <span class="leading-[1.3]">Based on <br>11 reviews</span>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/google_g_icon.webp'; ?>" alt="Google reviews" class="mt-0 mb-0" width="50">
                </a>
                <a href="https://www.mybuilder.com/profile/theplasterguy" class="no-underline !text-[#404040]">
                    <!-- <svg aria-hidden="true" focusable="false" data-prefix="fass" data-icon="star-sharp" class="svg-inline--fa fa-star-sharp sc-d585af5e-1 kpKuOC" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" color="#5E257A" width="1rem" fill="currentColor" style="width: 1rem; height: 1rem;">
                    <path fill="currentColor" d="M288.1 0l63.5 195.6H557.2L390.9 316.4 454.4 512 288.1 391.1 121.7 512l63.5-195.6L18.9 195.6H224.5L288.1 0z"></path>
                </svg> -->
                    <div class="flex items-center gap-2">
                        <span class="block font-bold text-5xl leading-[1.3]">5/5</span>
                        <span class="leading-[1.3]">Based on <br>319 reviews</span>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/mybuilder.webp'; ?>" alt="checkatrade reviews" class="mt-0" width="170">
                </a>
            </div>
            <div class="testimonials-wrapper col-span-3">
                <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
                    <div class="flex md:items-center items-end justify-between gap-4 mb-2">
                        <div class="md:pl-[25px]">
                            <?php if (get_field('tstls_title')): ?>
                                <h2 class="section-ttl"><?php the_field('tstls_title'); ?></h2>
                            <?php endif; ?>
                            <?php if (get_field('tstls_description')): ?>
                                <p class="text-xl"><?php the_field('tstls_description'); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="testimonials-nav-wrapper flex gap-4"></div>
                    </div>

                    <?php if (have_rows('testimonials_items')) : ?>
                        <div class="testimonials-slider">
                            <?php while (have_rows('testimonials_items')) : the_row(); ?>
                                <div class="testimonials-slider__item bg-[#F3F0EB]">
                                    <div class="p-4">
                                        <p class="mt-0"><?php the_sub_field('testimonial'); ?></p>
                                        <span class="block italic font-semibold">- <?php the_sub_field('title'); ?></span>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>