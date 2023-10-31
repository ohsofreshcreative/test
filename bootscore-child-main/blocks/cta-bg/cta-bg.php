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
 
<section <?php echo $anchor; ?> class="ctaBg__section -pt-12 -pt-8-xl -pb-12 -pb-8-xl relative-div bg-center <?php echo esc_attr( $class_name ); ?>" style="background-image:url(<?php echo aq_resize( $homeHero['bg']['url'], 1200, true ); ?>);">
<div class="ctaBg__gradient"></div>
	<div class="con-main relative-scroll">
	<div class="grid-1">
		<div class="w-50-desktop mrg-auto">
		<h2 class="ctaBg__h1 blurIn -mb-2">
			<?php echo ( $homeHero['txt'] ); ?>
		</h2>
		<div class="blurIn -mt-3 ctaBg__opis"><?php echo ( $homeHero['opis'] ); ?></div>
		<?php if( $homeHero['btn1'] ): ?> 
		<div class="-mt-3 box-btns-hero box-btns-hero--center">
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