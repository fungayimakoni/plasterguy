<?php
// Block Name: Operational Areas

$id = 'operational-areas-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div id="<?php echo $id; ?>" <?php echo get_block_wrapper_attributes(); ?>>
    <section class="section-padding">
        <div class="wrapper">
            <div class="grid md:grid-cols-3 grid-cols-1 gap-6 items-center">
                <div class="intro">
                    <h2 class="section-ttl"><?php the_field('oa_title'); ?></h2>
                    <p><?php the_field('oa_description'); ?></p>
                </div>
                <div class="map-wrp px-4">
                    <?php
                    $image = get_field('areas_map_points');
                    if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="locations-list md:pl-6">
                    <h3 class="font-bold mt-0 mb-4 text-white text-2xl hidden"><?php the_field('areas_title'); ?></h3>
                    <?php if (have_rows('areas_listing')): ?>
                        <div class="p-6 py-12 bg-[#007AC2] rounded-tr-[40px] h-full">
                            <?php while (have_rows('areas_listing')): the_row();
                                $area_name = get_sub_field('area_name');
                            ?>
                                <h3 class="mb-0 mt-0 text-white text-4xl flex items-center gap-2">
                                    <?php echo $area_name; ?>
                                </h3>
                                <div class="flex gap-4">
                                    <div class="mt-6"></div>
                                    <div class="text-white pt-6">
                                        <div class="flex gap-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="25" height="25" fill="#fff"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM320.7 249.2C331.5 223.6 336 204.4 336 192C336 112.5 271.5 48 192 48C112.5 48 48 112.5 48 192C48 204.4 52.49 223.6 63.3 249.2C73.78 274 88.66 301.4 105.8 329.1C134.2 375.3 167.2 419.1 192 451.7C216.8 419.1 249.8 375.3 278.2 329.1C295.3 301.4 310.2 274 320.7 249.2V249.2z"/></svg>
                                            <p class="mt-0"><?php the_sub_field( 'branch_address' ); ?></p>
                                        </div>
                                        <div class="flex gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" width="25" height="25"><!--!Font Awesome Free v7.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path fill="#ffffff" d="M224.2 89C216.3 70.1 195.7 60.1 176.1 65.4L170.6 66.9C106 84.5 50.8 147.1 66.9 223.3C104 398.3 241.7 536 416.7 573.1C493 589.3 555.5 534 573.1 469.4L574.6 463.9C580 444.2 569.9 423.6 551.1 415.8L453.8 375.3C437.3 368.4 418.2 373.2 406.8 387.1L368.2 434.3C297.9 399.4 241.3 341 208.8 269.3L253 233.3C266.9 222 271.6 202.9 264.8 186.3L224.2 89z"/></svg>
                                            <p class="!my-0"><?php the_sub_field( 'phone' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex mt-6">
                                    <?php $link = get_field('oa_cta'); ?>
                                    <?php
                                    if ($link):
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                        <a class="rw-button !inline-block" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</div>