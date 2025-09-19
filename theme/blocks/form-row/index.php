<?php
// Block Name: Form block

$id = 'form-row-' . $block['id'];

?>

<div id="<?php echo $id; ?>" <?php echo get_block_wrapper_attributes(); ?>>
    <section class="section-padding section-divider relative">
        <div class="wrapper">
            <div class="flex md:gap-8 gap-4 md:flex-row flex-col">
                <div class="ttle md:w-[35%]">
                    <h2 class="section-ttl"><?php the_field( 'frsection_title' ); ?></h2>
                    <?php $fbsection_desc = get_field( 'section_description' ); ?>
                    <?php if ( $fbsection_desc ) : ?>
                        <?php echo $fbsection_desc; ?>
                    <?php endif; ?>
                </div>
                <div class="md:w-[65%] pl-20">
                    <?php echo do_shortcode( get_field( 'form_shortcode' ) ); ?>
                </div>
            </div>
        </div>
    </section>
</div>
