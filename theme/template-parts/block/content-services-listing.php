<?php
// Block Name: Home Hero

$id = 'home-hero-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="py-20">
    <div class="wrapper">
        <h2 class="section-ttl"><?php the_field('section_title'); ?></h2>

        <?php if (have_rows('services_list')): ?>
            <div class="flex gap-6 mt-12">
                <?php while (have_rows('services_list')): the_row();
                    $image = get_sub_field('s_image');
                    $title = get_sub_field('s_title');
                    $description = get_sub_field('s_description');
                    $link = get_sub_field('s_cta');
                ?>
                    <div class="service-card bg-[#F3F0EB] flex flex-col">
                        <img class="mt-0 mb-0" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                        <div class="p-8 flex-1 flex flex-col items-start">
                            <h3 class="mt-0 text-2xl"><?php echo $title; ?></h3>
                            <?php if ($description): ?>
                                <div class="mb-4"><?php echo $description; ?></div>
                            <?php endif; ?>

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
</section>