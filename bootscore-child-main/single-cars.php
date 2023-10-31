<?php

/*
 * Template Name: Samochody
 * Template Post Type: cars
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

	<div class="row cars">
		<div class="">

			<main id="main" class="site-main">

			

			<div class="grid-2-1 -gap-10 grid-1-l -gap-6-l">
				<div class="order2-l">
					<header class="entry-header">
						<div class="">
							<div class="blurIn"><?php the_post(); ?></div>
							<div class="blurIn"><?php bootscore_category_badge(); ?></div>
							
						</div>
						<div class="blurIn -mt-6"><?php bootscore_post_thumbnail(); ?></div> 
					</header>
					<div class="entry-content blurIn">
						<?php the_content(); ?>
					</div>

					<h3 class="-mt-6 -mb-3 blurIn">Formularz kontaktowy</h3>
					<div class="contact__form bg-white blurIn delay-15">
						<?php echo apply_shortcodes( '[contact-form-7 id="485" title="Oferta - samochód"]' ); ?>
					</div> 
				</div>
				<div class="cars__right blurIn delay-1 order1-l"> 
					<h5 class="-mt-2 -mb-3"><?php the_title(); ?></h5>
					<p class="-mb-1"><b>Rocznik:</b> <?php the_field('year'); ?></p>
					<p class="-mb-1"><b>Przebieg:</b> <?php the_field('mileage'); ?></p>
					<p class="-mb-1"><b>Silnik, paliwo:</b> <?php the_field('engine'); ?></p>
					<b class="d-block main -fs-30 -mt-2"><?php the_field('price'); ?></b>
					<div class="main-btn -mt-5"><a class="-fs-20 w-100 text-center" href="tel:226107777">22 610 77 77</a></div>
					<div class="dark-btn -mt-2"><a class="w-100 text-center" href="http://abpol.ohsofresh.pl/index.php/kontakt/">Kontakt</a></div>
				</div>
			</div>
			

			<footer class="entry-footer clear-both">
				<div class="mb-4">
				<?php bootscore_tags(); ?>
				</div>
			</footer>

			<section class="related__news -pt-8 -mt-10 -mb-13">
			<div class="container">
				<h3 class="blurIn -pb-3">Pozostałe samochody</h3>
			</div>

			<div class="related__block grid-3 -gap-2 grid-1-l">
				<?php
			if ( get_query_var('paged') ) {
				$paged = get_query_var('paged');
			} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
				$paged = get_query_var('page');
			} else {
				$paged = 1;
			}
			
			$custom_query_args = array(
				'post_type' => 'cars', 
				'posts_per_page' => '3',
				'paged' => $paged,
				'post_status' => 'publish',
				'ignore_sticky_posts' => true,
				
				'order' => 'DESC', // 'ASC'
				'orderby' => 'date' // modified | title | name | ID | rand
			);
			$custom_query = new WP_Query( $custom_query_args );
			
			if ( $custom_query->have_posts() ) :
				$i = 0;
				while( $custom_query->have_posts() ) : $custom_query->the_post(); 
				
					$categories = get_the_category();

					if ( ! empty( $categories ) ) {
						$category_name = $categories[0]->name;
					}
				?>
			<?php $i++; // increment i by one ?>
				<div class="blog__card blurIn">
					<a class="" href="<?php the_permalink() ?>">
					<article class=" news__article position-relative">
						<div class="news__image">
							<?php the_post_thumbnail( ); ?>
						</div>
						<div class="card__body news__content">
							<?php bootscore_category_badge(); ?>
							<h5 class="post-title font-bold -fs-20"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
							<p><?php the_field('year'); ?> • <?php the_field('mileage'); ?> • <?php the_field('engine'); ?></p>
							<h6 class="-pt-3"><?php the_field('price'); ?></h6>
							<div class="main-btn -mt-2"><a href="<?php the_permalink(); ?>">Zobacz</a></div>
						</div>
					</article>
					</a>
				</div>
				<?php
				endwhile;
				?>
			
				<?php
					wp_reset_postdata(); // reset the query 
				else:
					echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
				endif;
				?>

			</div>
			</section>

        </main>

      </div>
    </div>

  </div>
</div>

<?php
get_footer();