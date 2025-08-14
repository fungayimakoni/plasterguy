<?php
/**
 * Block template file: 
 *
 * Posts Listing Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'posts-listing-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-posts-listing';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>


<?php
/**
 * Block template file: 
 *
 * Posts Listing Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'posts-listing-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-posts-listing';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
	<?php echo '#' . $id; ?> {
		/* Add styles that use ACF values here */
	}
</style>

<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $classes ); ?>">
	<?php the_field( 'pl_section_title' ); ?>
	<?php the_field( 'pl_section_description' ); ?>
	<?php $pl_section_cta = get_field( 'pl_section_cta' ); ?>
	<?php if ( $pl_section_cta ) : ?>
		<a href="<?php echo esc_url( $pl_section_cta['url'] ); ?>" target="<?php echo esc_attr( $pl_section_cta['target'] ); ?>"><?php echo esc_html( $pl_section_cta['title'] ); ?></a>
	<?php endif; ?>
	<?php $posts_selection = get_field( 'posts_selection' ); ?>
	<?php if ( $posts_selection ) : ?>
		<?php foreach ( $posts_selection as $post_ids ) : ?>
			<a href="<?php echo get_permalink( $post_ids ); ?>"><?php echo get_the_title( $post_ids ); ?></a>
		<?php endforeach; ?>
	<?php endif; ?>
</div>