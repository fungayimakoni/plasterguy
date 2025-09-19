<?php
// Block Name: Why Choose

$id = 'why-choose-' . $block['id'];
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div id="<?php echo $id; ?>" <?php echo get_block_wrapper_attributes(); ?>>
    <section class="section-divider relative pb-20" style="background-image: url('<?php the_field('wc_background_image'); ?>')">
        <div class="pt-20 relative">
                <div class="md:flex gap-12 justify-between items-center bg-[#08253A]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stars-home.svg" alt="" class="absolute left-0 top-0 md:max-w-[140px] max-w-[100px] opacity-65">
                    <div class="md:w-1/2 md:max-w-[660px] ml-auto pl-6 py-12 relative">
                        <div    
                            data-aos="fade-down"
                            data-aos-easing="linear"
                            data-aos-duration="1500">
                            <h2 class="section-ttl"><?php the_field('wc_title'); ?></h2>
                            <p class="mb-4 text-2xl"><?php the_field('wc_description'); ?></p>
                            <?php $wc_section_cta = get_field( 'wc_section_cta' ); ?>
                            <?php if ( $wc_section_cta ) : ?>
                                <a href="<?php echo esc_url( $wc_section_cta['url'] ); ?>" target="<?php echo esc_attr( $wc_section_cta['target'] ); ?>" class="rw-button !inline-block"><?php echo esc_html( $wc_section_cta['title'] ); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <div class="md:w-1/2 flex justify-end">
                        <?php $wc_background_image = get_field( 'wc_background_image' ); ?>
                        <?php $size = 'full'; ?>
                        <?php if ( $wc_background_image ) : ?>
                            <?php echo wp_get_attachment_image( $wc_background_image, $size, "", array( "class" => "max-h-[400px] object-cover object-top" ) ); ?>
                        <?php endif; ?>
                    </div>
                </div>

                <?php if (have_rows('wc_items')): ?>
                    <div class="wrapper flex flex-col gap-6 mb-8">
                        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 -mt-8">
                        <?php while (have_rows('wc_items')): the_row();
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('item_title');
                            $description = get_sub_field('item_description');
                            $link = get_sub_field('s_cta');
                        ?>
                            <div class="bg-[#FFF] p-4 border border-[#F0F7FC] rounded-lg flex flex-col gap-4 border-b-6 border-[#F0F7FC] bg-white" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="<?php echo get_row_index() *300 + 300; ?>">
                                <div class="icon-wrapper w-[60px] mx-auto">
                                    <?php if ( $icon ) : ?>
                                        <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" width="80" height="60" class="block mt-0 mb-0" />
                                    <?php endif; ?>
                                </div>
                                <div class="flex-1 flex flex-col items-center gap-2">
                                    <h3 class="mt-0 mb-0 text-xl !text-[#08253A] text-center"><?php echo $title; ?></h3>
                                    <div class="text-lg text-center !text-[#08253A]"><?php echo $description; ?></div>
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
                    </div>
                <?php endif; ?>
        </div>
    </section>
</div>