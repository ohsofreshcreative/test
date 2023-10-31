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
 

<section class="bg-dark-section partners__section relative-div txtImg -pt-8-xl -pb-8-xl -pt-10 -pb-10  <?php echo esc_attr( $class_name ); ?>">
        <div class="con-main">
            <div class="grid-1-2-1 grid-1-xl -gap-12 -gap-3-xl -mb-5">
                <div>
                    <h2 class="partners__h2 blurIn blur-1 "><?php echo ( $txtImg['header'] ); ?></h2>
                </div>
                <div class="blurIn partners__firstTxt">
                    <?php echo ( $txtImg['opis'] ); ?>
                </div>
                <div>
                    <?php if( $txtImg['btn'] ): ?> 
	                    <div class="main-btn blurIn">
		                    <a href="<?php echo esc_url( $txtImg['btn']['url'] ); ?>"><?php echo esc_html( $txtImg['btn']['title'] ); ?></a>
	                    </div>
                    <?php endif; ?>	
                </div>
            </div>
        </div>
        <div class="con-main">
            <div class="grid-5 grid-2-xl">
                <?php if (have_rows('imgdesc')) : while (have_rows('imgdesc')) : the_row();   ?>
                    <?php if (have_rows('box')) : while (have_rows('box')) : the_row();
                     $img = get_sub_field('ikona');
                     $editor_content = get_sub_field('opisek');
                    ?>
                        <div class="blurIn partners__box relative-div">
                            <div class="flex-ctr-div--partners">
                                <img class="imgBenefits__icon" src="<?php echo esc_html( $img ); ?>">
                            </div>
                            <div class="partners__txt"><?php echo apply_filters('the_content', $editor_content); ?></div>
                        </div>
                    <?php endwhile; endif; ?>
                <?php endwhile; endif; ?>
            </div>
        </div>
</section>

<?php endif; ?>
 
