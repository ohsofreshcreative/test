<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Anchor
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Class
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}

?>

<section <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> headtext -mt-6">
	<?php $headtext = get_field('headtext');
	if( $headtext ): ?>
		<div class="">
			<h3 class="blurIn"><?php echo ( $headtext['header'] ); ?></h3>
			<div class="-mt-2 blurIn"><?php echo ( $headtext['txt'] ); ?></div>
		</div>
	<?php endif; ?>
</section>
 

