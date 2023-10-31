<?php

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
$align = '';
if ( ! empty( $block['align'] ) ) {
    $align .= ' align' . $block['align'];
}

?>

<section <?php echo $anchor; ?> class="image con-main position-relative blurIn delay-05 -mt-13 -mt-5-s <?php echo esc_attr( $class_name ); ?>">
	<?php
	$img = get_field('img');
		
	if( $img ): ?>
	<img src="<?php echo aq_resize( $img['url'], 1430, true ); ?>" alt="<?php echo esc_attr( $img['alt'] ); ?>" />

	<?php endif; ?>
</section>
