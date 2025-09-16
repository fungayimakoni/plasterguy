<?php
// Block Name: Home Hero

$id = 'home-hero-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="section-divider relative px-6 pb-20">
    <div class="flex relative">
        <div class="w-2/3 absolute left-0 top-0 h-full rounded-bl-[60px] overflow-hidden">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/angled-lines-a.svg" alt="" class="absolute left-0 -bottom-[130px]">
        </div>
        <div class="bg-[#f0f7fc] w-1/3 absolute right-0 top-0 h-full rounded-tr-[60px]"></div>
        <div class="wrapper flex justify-between gap-12 relative">
            <div class="flex flex-col justify-center w-[45%] py-20" data-aos="zoom-in" data-aos-duration="1500">
                <h1 class="text-[55px]"><?php the_field('heading_title'); ?></h1>
                <h2 class="mt-0 mb-0"><?php the_field('sub_heading'); ?></h2>

                <div class="description text-2xl">
                    <?php the_field('hero_description'); ?>
                </div>

                <div class="flex gap-2">
                    <?php
                    $cta_button_one = get_field('cta_button_one');
                    if ($cta_button_one):
                        $link_url = $cta_button_one['url'];
                        $link_title = $cta_button_one['title'];
                        $link_target = $cta_button_one['target'] ? $cta_button_one['target'] : '_self';
                    ?>
                        <a class="rw-button rw-button__solid" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>

                    <?php
                    $cta_button_two = get_field('cta_button_two');
                    if ($cta_button_two):
                        $link_url = $cta_button_two['url'];
                        $link_title = $cta_button_two['title'];
                        $link_target = $cta_button_two['target'] ? $cta_button_two['target'] : '_self';
                    ?>
                        <a class="rw-button rw-button__solid" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="w-[55%] py-20">
                <div class="rounded-tr-[60px] overflow-hidden">
                    <?php $hero_slider_images = get_field( 'hero_slider' ); ?>

                    <?php if ( $hero_slider_images ) : ?>
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <?php foreach ( $hero_slider_images as $hero_slider_image ): ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url( $hero_slider_image['url'] ); ?>" alt="<?php echo esc_attr( $hero_slider_image['alt'] ); ?>" class="mt-0 mb-0" />
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination hidden gap-4 py-6"></div>
                            <div class="autoplay-progress">
                                <svg viewBox="0 0 48 48">
                                    <circle cx="24" cy="24" r="20"></circle>
                                </svg>
                                <span></span>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>