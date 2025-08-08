<?php
// Block Name: Operational Areas

$id = 'fullbleed-copy-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="py-20 section-divider relative">
    <div class="wrapper">
        <div class="flex gap-8">
            <div class="ttle w-[35%]">
                <h2 class="section-ttl"><?php the_field('fb_title'); ?></h2>
            </div>
            <div class="copy w-[65%] text-xl -mt-6">
                <?php the_field('fb_description'); ?>
            </div>
        </div>

        <?php if (have_rows('icon_listing')): ?>
            <div class="grid grid-cols-4 max-w-[1000px] mx-auto mt-8">
                <?php while (have_rows('icon_listing')): the_row();
                    $title = get_sub_field('title');
                    $image = get_sub_field('icon');
                ?>
                    <div class="">
                        <?php if (!empty($image)): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="60" height="60" />
                        <?php endif; ?>
                        <p><?php echo $title; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
    </div>
    <div class="swiper-pagination"></div>
</div>