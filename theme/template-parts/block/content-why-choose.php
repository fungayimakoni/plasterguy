<?php
// Block Name: Why Choose

$id = 'why-choose-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="py-20" style="background-image: url('<?php the_field('wc_background_image'); ?>')">
    <div class="wrapper">
        <div class="flex md:flex-row flex-col">
            <div class="text-white">
                <h2 class="section-ttl text-white"><?php the_field('wc_title'); ?></h2>
                <p class="mb-6 text-xl"><?php the_field('wc_description'); ?></p>
            </div>

            <?php if (have_rows('wc_items')): ?>
                <div class="grid grid-cols-2 gap-6 md:-mt-28">
                    <?php while (have_rows('wc_items')): the_row();
                        $image = get_sub_field('icon');
                        $title = get_sub_field('item_title');
                        $description = get_sub_field('item_description');
                        $link = get_sub_field('s_cta');
                    ?>
                        <div class="service-card bg-[#F3F0EB] flex flex-col md:p-8 p-6">
                            <!-- <img class="mt-0 mb-4" width="40" height="40" src="<?php //echo esc_url($image['url']); 
                                                                                    ?>" alt="<?php //echo esc_attr($image['alt']); 
                                                                                                                                    ?>" /> -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="40px" height="40px" viewBox="0 0 24 24">
                                <path d="M7 13.689l.637-.636 2.863 2.674 7.022-6.87.637.637L10.5 17zM22.8 12.5A10.3 10.3 0 1 1 12.5 2.2a10.297 10.297 0 0 1 10.3 10.3zm-1 0a9.3 9.3 0 1 0-9.3 9.3 9.31 9.31 0 0 0 9.3-9.3z"></path>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                            </svg>
                            <div class="flex-1 flex flex-col items-start">
                                <h3 class="mt-0 md:text-2xl text-lg"><?php echo $title; ?></h3>
                                <div class="mb-4"><?php echo $description; ?></div>
                                <?php
                                if ($link):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                    <a class="inline-block border border-black py-2 px-4 mt-auto" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>