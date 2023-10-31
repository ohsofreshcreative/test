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
 

<section class="phonesBenefits__section relative-div txtImg -pt-8-xl -pb-8-xl -pt-10 -pb-13  <?php echo esc_attr( $class_name ); ?>">
<div class="gradient-overlaySection--right"></div>
<div class="extra-description__overlay--second">
    <img src="/wp-content/uploads/2023/10/Co-nas-wyroznia.svg" />
</div>
        <div class="con-main">
            <div class="grid-2 grid-1-xl">
                <div>
                    <h2 class="phonesBenefits__h2 blurIn blur-1 -mb-7"><?php echo ( $txtImg['header'] ); ?></h2>
                </div>
            </div>
        </div>
        <div class="con-main">
            <div class="grid-1-2 grid-1-xl items-right just-items-str -gap-5-xl -gap-9">
                <div class="txtImg__img order1 ">
                    <div class="relative-div phonesBenefits__boxImg">
                        <img class="blurIn phonesBenefits__img1" src="<?php echo aq_resize( $txtImg['img1']['url'], 320, true ); ?>" alt="<?php echo esc_attr( $txtImg['img1']['alt'] ); ?>" />
                        <img class="blurIn phonesBenefits__img2" src="<?php echo aq_resize( $txtImg['img2']['url'], 320, true ); ?>" alt="<?php echo esc_attr( $txtImg['img2']['alt'] ); ?>" />
                    </div>
				</div>
                <?php if (have_rows('imgdesc')) : while (have_rows('imgdesc')) : the_row();   ?>
                <div class="order1 order2-l -mr-10 -mr-5-xl -mr-0-l">
                    <?php if (have_rows('box')) : while (have_rows('box')) : the_row();
                     $img = get_sub_field('ikona');
                     $txt = get_sub_field('title');
                     $editor_content = get_sub_field('opis');
                    ?>
                        <div class="blurIn imgBenefits__box -mb-4 -mb-3-l">
                            <div class="add-min-width">
                                <img class="imgBenefits__icon" src="<?php echo esc_html( $img ); ?>">
                            </div>
                            <div>
                                <h4 class=" -mb-1 imgBenefits__h4"><?php echo esc_html( $txt ); ?></h4>
					            <div class=" dark-opis imgBenefits__txt"><?php echo apply_filters('the_content', $editor_content); ?></div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div> 
                <?php endwhile; endif; ?>
            </div>
        </div>
</section>

<?php endif; ?>
 
