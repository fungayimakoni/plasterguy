<?php
// Block Name: Operational Areas

$id = 'operational-areas-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="pb-20">
    <div class="wrapper">
        <div class="grid grid-cols-3 gap-6 bg-black p-12">
            <div class="intro">
                <h2 class="section-ttl text-white"><?php the_field('oa_title'); ?></h2>
                <p class="text-white text-xl"><?php the_field('oa_description'); ?></p>
                <?php $link = get_field('oa_cta'); ?>
                <?php
                if ($link):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <a class="rw-button rw-button__solid !inline-block" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
            <div class="map-wrp px-4">
                <?php
                $image = get_field('areas_map_points');
                if (!empty($image)): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="locations-list">
                <h3 class="font-bold mt-0 mb-4 text-white text-2xl"><?php the_field('areas_title'); ?></h3>
                <?php if (have_rows('areas_listing')): ?>
                    <div class="grid grid-cols-2 gap-2">
                        <?php while (have_rows('areas_listing')): the_row();
                            $area_name = get_sub_field('area_name');
                        ?>
                            <p class="mb-0 mt-0 text-white text-xl"><?php echo $area_name; ?></p>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>