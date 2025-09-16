<?php
// Block Name: Operational Areas

$id = 'fullbleed-copy-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="py-20 section-divider relative">
    <div class="wrapper">
        <div class="flex gap-8 md:flex-row flex-col">
            <div class="ttle md:w-[35%]">
                <h2 class="section-ttl"><?php the_field('fb_title'); ?></h2>
            </div>
            <div class="copy md:w-[65%] -mt-6">
                <?php the_field('fb_description'); ?>
            </div>
        </div>

        <?php if (have_rows('icon_listing')): ?>
            <div class="hidden md:grid grid-cols-4 max-w-[1000px] mx-auto mt-8">
                <?php while (have_rows('icon_listing')): the_row();
                    $title = get_sub_field('title');
                    $image = get_sub_field('icon');
                ?>
                    <div class="flex flex-col items-center">
                        <?php if (!empty($image)): ?>
                            <div class="shadow-xl rounded-full w-[120px] h-[120px] flex items-center justify-center">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="80" height="80" />
                            </div>
                        <?php endif; ?>
                        <p><?php echo $title; ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>