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
$align = '';
if ( ! empty( $block['align'] ) ) {
    $align .= ' align' . $block['align'];
}

?>

<section class="con-main txtImg -mt-13 <?php echo esc_attr( $class_name ); ?>">
    <?php
        $txtImg = get_field('txtImg');
		if( have_rows('txtImg') ): while ( have_rows('txtImg') ) : the_row();  ?>
            <div class="grid-2 grid-1-l items-c -gap-4-l">
				<div class="txtImg__img order2 order1-l">
					<img class="blurIn" src="<?php echo aq_resize( $txtImg['img']['url'], 700, true ); ?>" alt="<?php echo esc_attr( $txtImg['img']['alt'] ); ?>" />
				</div>
                <div class="order1 order2-l -mr-10 -mr-0-l">
                    <h2 class="blurIn"><?php echo ( $txtImg['header'] ); ?></h2>
					<div class="blurIn -mt-1"><?php echo ( $txtImg['txt'] ); ?></div>

					<?php if( $txtImg['btn'] ): ?> 
						<div class="main-btn blurIn -mt-3"><a href="<?php echo esc_url( $txtImg['btn']['url'] ); ?>"><?php echo esc_html( $txtImg['btn']['title'] ); ?></a></div>
					<?php endif; ?>

                </div> 
            </div>
    <?php endwhile; endif; ?>
</section>
 
