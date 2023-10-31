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

<?php
	$txtImg = get_field('imgdesc');
	if( $txtImg ): ?>
 

<section <?php echo $anchor; ?> class="txtImg opisProduct__section relative-div -pt-12-xl -pb-8-xl -pt-19 -pb-11 <?php echo esc_attr( $class_name ); ?>">
<div class="gradient-overlaySection"></div>
<div class="con-main relative-div">
<div class="extra-description__overlay">
    <img src="/wp-content/uploads/2023/10/Jak-to-dziala_.svg" />
</div>
</div>
        <div class="con-main">
            <div class="grid-2 grid-1-l items-c items-right just-items-str -gap-3-xxl -gap-16">
                <div class=" -mr-10 -mr-5-xl -mr-0-l">
                    <h2 class="blurIn blur-1 -mb-4"><?php echo ( $txtImg['title'] ); ?></h2>
					<div class="opisProduct__first blurIn blur-2"><?php echo ( $txtImg['opis1'] ); ?></div>
                    <div class="opisProduct__second blurIn blur-3 -mt-3"><?php echo ( $txtImg['opis2'] ); ?></div>
                </div> 
                <div class="w-one-hundred blurIn blur-1 smaller-img-mobile">
                    <img class="blurIn txtImg__photo" src="<?php echo aq_resize( $txtImg['img']['url'], 300, true ); ?>" alt="<?php echo esc_attr( $txtImg['img']['alt'] ); ?>" />
				</div>
            </div>
        </div>
</section>

<?php endif; ?>
 
