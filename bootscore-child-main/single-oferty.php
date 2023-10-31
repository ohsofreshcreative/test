<?php

/*
 * Template Name: Oferta pracy
 * Template Post Type: oferty
 */

get_header();  
?>

<div id="content" class="site-content con-main container py-5 mt-4 -pb-0">
  <div id="primary" class="content-area">

    <!-- Hook to add something nice -->
    <?php bs_after_primary(); ?>

    <!-- Breadcrumb -->
	<div class="bread blurIn">
		<?php the_breadcrumb(); ?>
	</div>

	<div class="row">
		<div class="">

			<main id="main" class="site-main">

			<header class="entry-header -mt-12">
				<div class="text-center w-50 m-auto w-100-l">
					<div class="blurIn"><?php the_post(); ?></div>
					<div class="blurIn"><?php bootscore_category_badge(); ?></div>
					<h1 class="blurIn -mt-2"><?php the_title(); ?></h1>
				</div>
				
			</header>

			<div class="entry-content w-60 m-auto blurIn w-100-l delay-1">
				<?php the_content(); ?>
			</div>

			<footer class="entry-footer clear-both">
				<div class="mb-4">
				<?php bootscore_tags(); ?>
				</div>
			</footer>
			<div id="aplikuj" class="contact__form w-60 m-auto bg-white blurIn -mt-5 -mb-5">
				<?php echo do_shortcode("[contact-form-7 id='412' title='Praca']"); ?>
			</div> 
        </main>

      </div>
    </div>

  </div>
</div>

<?php
get_footer();