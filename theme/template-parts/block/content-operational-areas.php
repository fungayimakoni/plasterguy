<?php
// Block Name: Operational Areas

$id = 'operational-areas-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="pb-20">
    <div class="wrapper">
        <div class="grid md:grid-cols-3 grid-cols-1 gap-6 bg-black p-12">
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
            <div class="locations-list md:pl-6">
                <h3 class="font-bold mt-0 mb-4 text-white text-2xl"><?php the_field('areas_title'); ?></h3>
                <?php if (have_rows('areas_listing')): ?>
                    <div class="grid grid-cols-1 gap-2">
                        <?php while (have_rows('areas_listing')): the_row();
                            $area_name = get_sub_field('area_name');
                        ?>
                            <p class="mb-0 mt-0 text-white text-xl flex items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="20" height="20" fill="#fff"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM320.7 249.2C331.5 223.6 336 204.4 336 192C336 112.5 271.5 48 192 48C112.5 48 48 112.5 48 192C48 204.4 52.49 223.6 63.3 249.2C73.78 274 88.66 301.4 105.8 329.1C134.2 375.3 167.2 419.1 192 451.7C216.8 419.1 249.8 375.3 278.2 329.1C295.3 301.4 310.2 274 320.7 249.2V249.2z"/></svg>
                                <?php echo $area_name; ?>
                            </p>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>