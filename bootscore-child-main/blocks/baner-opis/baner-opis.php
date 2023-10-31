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

<?php
	$homeHero = get_field('homeHero');
	if( $homeHero ): ?>
 
<section <?php echo $anchor; ?> class="homeHero__section relative-div bg-center <?php echo esc_attr( $class_name ); ?>" style="background-image:url(<?php echo aq_resize( $homeHero['bg']['url'], 1400, true ); ?>);">
<div class="homeHero__gradient"></div>
<!-- <div class="homeHero__gradient-second"></div> -->
	<div class="con-main relative-scroll">
	<div class="grid-2 grid-1-l">
		<div class="w-100">
		<h1 class="homeHero__h1 blurIn -mb-2">
			<?php echo ( $homeHero['txt'] ); ?>
		</h1>
		<div class="blurIn -mt-3 homeHero__opis"><?php echo ( $homeHero['opis'] ); ?></div>
		<?php if( $homeHero['btn1'] ): ?> 
		<div class="-mt-3 box-btns-hero">
				<div class="second-btn blurIn">
					<a href="<?php echo esc_url( $homeHero['btn1']['url'] ); ?>"><?php echo esc_html( $homeHero['btn1']['title'] ); ?></a>
				</div>
				<div class="main-btn blurIn">
					<a href="<?php echo esc_url( $homeHero['btn2']['url'] ); ?>"><?php echo esc_html( $homeHero['btn2']['title'] ); ?></a>
				</div>
		</div>
		<?php endif; ?>	
	</div>
	</div>
	</div>
</section>

<?php endif; ?>