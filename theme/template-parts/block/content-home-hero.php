<?php
// Block Name: Home Hero

$id = 'home-hero-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="bg-[#F9EEDD]">
    <div class="flex gap-4 md:flex-row flex-col">
        <div class="md:w-1/2 overflow-hidden">
            <?php
            $image = get_field('background_image');
            $size = 'full';

            if ($image) {
                echo wp_get_attachment_image($image, $size, "", array("class" => "mt-0 mb-0 min-h-[700px] object-cover transition duration-500 ease-in-out hover:scale-125"));
            }
            ?>
        </div>

        <div class="md:w-1/2 max-w-[640px] flex flex-col justify-center pl-12">
            <h1 class="text-5xl"><?php the_field('heading_title'); ?></h1>
            <h2 class="mt-0 mb-0"><?php the_field('sub_heading'); ?></h2>

            <div class="description text-xl"><?php the_field('hero_description'); ?></div>

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
                    <a class="rw-button rw-button__trans" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>