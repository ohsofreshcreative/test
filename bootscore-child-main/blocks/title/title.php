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

<section <?php echo $anchor; ?> class="title con-main position-relative -pt-10 <?php echo esc_attr( $class_name ); ?>">
	<?php
	$title = get_field('title');
		
	if( have_rows('title') ): while ( have_rows('title') ) : the_row();  ?>
		<div class="title__wrapper grid-2 grid-1-m">
			<div class="title__header w-70 -mr-13 -mr-0-xl w-90-xl">
				<h2 class="blurIn"><?php echo ( $title['header'] ); ?></h2>
			</div> 
			<div class="title__content w-70 w-100-l">
				<div class="-mt-2 blurIn"><?php echo ( $title['txt'] ); ?></div>

				<?php if( $title['btn'] ): ?>
					<div class="main-btn -mt-3 blurIn">
						<a href="<?php echo esc_url( $title['btn']['url'] ); ?>"><?php echo esc_html( $title['btn']['title'] ); ?></a>
					</div>
				<?php endif; ?>

			</div>
		</div>
	<?php endwhile; endif; ?>
</section>