<?php
// Block Name: Working Process

$id = 'working-process-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<section id="<?php echo $id; ?>" class="py-20">
    <div class="wrapper">
        <?php
        $s_title = get_field('s_title');
        $s_description = get_field('s_description');
        $link = get_field('s_cta');
        ?>

        <?php
        if ($link):
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        endif; ?>

        <div class="grid grid-cols-3 gap-6">
            <div class="flex flex-col justify-center items-start">
                <h2 class="section-ttl mb-4"><?php echo $s_title; ?></h2>
                <p class="mb-6 text-xl"><?php echo $s_description; ?></p>
                <a class="rw-button rw-button__solid !inline-block" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
            </div>

            <?php if (have_rows('working_steps')): ?>
                <?php while (have_rows('working_steps')): the_row();
                    $title = get_sub_field('step_title');
                    $step_description = get_sub_field('step_description');
                ?>
                    <div class="border p-12">
                        <span class="font-bold text-6xl text-gray-400">0<?php echo get_row_index(); ?></span>
                        <h3 class="mt-4 text-2xl"><?php echo $title; ?></h3>
                        <?php echo $step_description; ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>