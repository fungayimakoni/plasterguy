<?php
// Block Name: Services Listing

$id = 'services-listing-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="mt-20 pl-6 bg-[#F0F7FC] py-20 ml-6 rounded-bl-[60px]">
    <div class="wrapper">
        <?php if (have_rows('services_list')): ?>
            <div class="text-center mb-12">
                <h2 class="section-ttl"><?php the_field('section_title'); ?></h2>
            </div>
            <div class="lg-blocks swiper">
                <div class="swiper-wrapper">
                    <?php while (have_rows('services_list')): the_row();
                        $image = get_sub_field('s_image');
                        $title = get_sub_field('s_title');
                        $description = get_sub_field('s_description');
                        $link = get_sub_field('s_cta');
                    ?>
                    <div class="swiper-slide relative rounded-2xl overflow-hidden">
                        <img class="mt-0 mb-0" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                        <div class="p-8 flex-1 flex flex-col items-start absolute left-0 bottom-0 bg-white w-[80%] rounded-tr-xl">
                            <h3 class="mt-0 mb-2 text-2xl"><?php echo $title; ?></h3>
                            <?php if ($description): ?>
                                <div class="mb-4"><?php echo $description; ?></div>
                            <?php endif; ?>
                        </div>
                        <?php
                            if ($link):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                                <a class="inline-block p-4 mt-auto bg-[#007AC2] absolute right-0 bottom-0 bg-linear-to-r from-[#EE322E] to-[#F79431]" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                                    <?php //echo esc_html($link_title); ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="20" height="20"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M566.6 342.6C579.1 330.1 579.1 309.8 566.6 297.3L406.6 137.3C394.1 124.8 373.8 124.8 361.3 137.3C348.8 149.8 348.8 170.1 361.3 182.6L466.7 288L96 288C78.3 288 64 302.3 64 320C64 337.7 78.3 352 96 352L466.7 352L361.3 457.4C348.8 469.9 348.8 490.2 361.3 502.7C373.8 515.2 394.1 515.2 406.6 502.7L566.6 342.7z"/></svg>
                                </a>
                            <?php endif; ?>
                    </div>
                    <?php endwhile; ?>
                </div>
                <div class="flex justify-center gap-4 mt-16">
                    <div class="swiper-button-prev rounded-full border w-[40px] h-[40px] flex items-center justify-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.889" height="16.778" viewBox="0 0 8.889 16.778" aria-hidden="true"><g id="Group_24" data-name="Group 24" transform="translate(0.5 16.071) rotate(-90)"><g id="Group_8" data-name="Group 8"><path id="Path_51" data-name="Path 51" d="M15.364,7.682,7.682,0,0,7.682" fill="none" stroke="#042042" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path></g></g></svg>
                    </div>
                    <div class="swiper-button-next rounded-full border w-[40px] h-[40px] flex items-center justify-center cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8.889" height="16.778" viewBox="0 0 8.889 16.778" aria-hidden="true"><g id="Group_24" data-name="Group 24" transform="translate(0.707 16.071) rotate(-90)"><g id="Group_8" data-name="Group 8"><path id="Path_51" data-name="Path 51" d="M15.364,0,7.682,7.682,0,0" fill="none" stroke="#042042" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path></g></g></svg>
                    </div>
                </div>
                <div class="swiper-pagination flex gap-4 hidden"></div>
            </div>
        <?php endif; ?>
    </div>
</section>