<?php
// Block Name: Flexible Content

    $id = 'flex-column-' . $block['id'];
    $swap_image = get_field( 'reverse_image_position' );

    if ( get_field( 'section_divider' ) == 1 ) : 
        $section_divider = "section-divider md:px-6";
    endif;

    if ( get_field( 'show_angled_lines' ) == 1 ) : 
        $show_angled_lines = "angled-lines";
    endif;

?>

<div id="<?php echo $id; ?>" <?php echo get_block_wrapper_attributes(); ?>>
    <section class="section-padding relative <?php echo $section_divider . ' ' . $show_angled_lines; ?>">
        <div class="wrapper">
            <div class="flex flex-col md:gap-16 gap-8 items-center <?php echo $swap_image ? 'md:flex-row-reverse' : 'md:flex-row'; ?>">
                <div class="md:w-1/2 <?php echo $swap_image ? 'rounded-br-[60px]' : 'rounded-bl-[60px]'; ?> overflow-hidden" data-aos="fade-right" data-aos-duration="1000">
                    <?php $fc_section_image = get_field( 'fc_section_image' ); ?>
                    <?php if ( $fc_section_image ) : ?>
                        <img src="<?php echo esc_url( $fc_section_image['url'] ); ?>" alt="<?php echo esc_attr( $fc_section_image['alt'] ); ?>" class="mt-0 mb-0" />
                    <?php endif; ?>
                </div>
                
                <div class="md:w-1/2 w-full <?php echo $swap_image ? 'lg:pr-16' : 'lg:pl-16'; ?>" data-aos="fade-left" data-aos-duration="1000">
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
</div>
