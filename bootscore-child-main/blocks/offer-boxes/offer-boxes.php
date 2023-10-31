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


<section class="bg-dark-section -pt-10 -pt-8-xl -pb-15 -pb-11-xl <?php echo esc_attr( $class_name ); ?>">
<div class="con-main">
	<div class="grid-1">
		<h2 class="offerBoxes__h2 -mb-5"><?php echo ( $txtImg['header'] ); ?></h2>
	</div>
</div>
<div class="con-main">
		<?php if (have_rows('imgdesc')) : while (have_rows('imgdesc')) : the_row();   ?>
		<div class="relative-div">
			<div>
			<div class="grid-4 grid-2-xl grid-1-m -gap-2 -gap-6-xl">
			<?php if (have_rows('box')) : while (have_rows('box')) : the_row();
                     $txt = get_sub_field('title');
					 $img = get_sub_field('img');
					 $link = get_sub_field('link');
                     $editor_content = get_sub_field('opisek');
                    ?>
                        <div class="offerSection__boxOffer relative-div blurIn">
							<div>
								<div class="bg-center relative-div offerSection__BackgroundImg" style="background-image:url(<?php echo esc_html( $img ); ?>);">
									<div class="imgOverlay__boxOffer"></div>
								</div>
							</div>
                            <div class="offerSection__boxWithTxt">
                                <div class="offerSection__boxOffer__h4 ">
									<?php echo apply_filters('the_content', $txt); ?>
								</div>
					            <div class="offerSection__boxOffer__opis"><?php echo apply_filters('the_content', $editor_content); ?></div>
								
                            </div>
							<div class="main-btn main-btn--white z-index-36 absolute-btn-offerBox blurIn -mt-3">
									<a href="<?php echo esc_html( $link ); ?>">Sprawdź produkt</a>
								</div>
                        </div>
                    <?php endwhile; endif; ?>
			</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
        </div>
</section>

<?php endif; ?>
 
