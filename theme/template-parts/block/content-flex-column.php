<?php
// Block Name: Flexible Content

$id = 'flex-column-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$image_side = get_field( 'image_position' );
$swap_image = get_field( 'reverse_image_position' );


if ( get_field( 'reverse_image_position' ) == 1 ) : 
    $flex_direction = "flex-row-reverse";
endif;

?>

<section id="<?php echo $id; ?>" class="py-20">
    <div class="wrapper">
        <div class="flex gap-16 items-center <?php echo $flex_direction; ?>">
            <div class="w-1/2 rounded-bl-[60px] overflow-hidden">
                <?php $fc_section_image = get_field( 'fc_section_image' ); ?>
                <?php if ( $fc_section_image ) : ?>
                    <img src="<?php echo esc_url( $fc_section_image['url'] ); ?>" alt="<?php echo esc_attr( $fc_section_image['alt'] ); ?>" class="mt-0 mb-0" />
                <?php endif; ?>
            </div>
            
            <div class="w-1/2 <?php echo $swap_image ? 'pr-16' : 'pl-16'; ?>">
                <?php if( get_field( 'fc_section_subtitle' ) ): ?>
                    <?php the_field( 'fc_section_subtitle' ); ?>
                <?php endif; ?>

                <?php if( get_field( 'fc_section_title' ) ): ?>
                    <h2 class="section-ttl"><?php the_field( 'fc_section_title' ); ?></h2>
                <?php endif; ?>

                <?php if( get_field( 'fc_section_description' ) ): ?>
                    <?php the_field( 'fc_section_description' ); ?>
                <?php endif; ?>

                <?php $fc_section_cta = get_field( 'fc_section_cta' ); ?>
                <?php if ( $fc_section_cta ) : ?>
                    <a href="<?php echo esc_url( $fc_section_cta['url'] ); ?>" target="<?php echo esc_attr( $fc_section_cta['target'] ); ?>" class="rw-button !inline-block"><?php echo esc_html( $fc_section_cta['title'] ); ?></a>
                <?php endif; ?>

                
            </div>
        </div>
    </div>
</section>