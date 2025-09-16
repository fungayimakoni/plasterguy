<?php
// Block Name: Why Choose

$id = 'why-choose-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="mt-12 pl-6 section-divider relative pb-20" style="background-image: url('<?php the_field('wc_background_image'); ?>')">
    <div class="pt-20">
        <div class="wrapper">
            <div class="flex gap-12 justify-betweeen">
                <?php if (have_rows('wc_items')): ?>
                    <div class="flex flex-col gap-6 w-1/2">
                        <div class="mb-4">
                            <h2 class="section-ttl"><?php the_field('wc_title'); ?></h2>
                            <p class="mb-6"><?php the_field('wc_description'); ?></p>
                        </div>
                        <?php while (have_rows('wc_items')): the_row();
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('item_title');
                            $description = get_sub_field('item_description');
                            $link = get_sub_field('s_cta');
                        ?>
                            <div class="bg-[#000] p-4 border border-[#007AC2] flex items-center gap-4 border-l-6 border-[#2DA667]" data-aos="flip-down">
                                <div class="icon-wrapper w-[60px]">
                                    <?php if ( $icon ) : ?>
                                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" width="60" height="60" class="block mt-0 mb-0" />
                                    <?php endif; ?>
                                </div>
                                <div class="flex-1 flex">
                                    <h3 class="mt-0 mb-0 md:text-lg text-lg"><?php echo $title; ?></h3>
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
                <div class="flex justify-end">
                    <img src="https://noc.ly/en/uploads/themes/yootheme/cache/db/think-tomorrow-db1d36ed.webp" alt="" class="max-h-[720px]">
                </div>
            </div>
        </div>
    </div>
</section>