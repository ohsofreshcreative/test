<?php

/**
 * Category Template: Equal Height
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>
<div id="content" class="blog con-main site-content <?= bootscore_container_class(); ?> py-5 mt-4 -pb-0">
  <div id="primary" class="content-area">

    <?php bs_after_primary(); ?>
	<div class="bread blurIn">
		<?php the_breadcrumb(); ?>
	</div>

    <main id="main" class="site-main">

<section class="news -pt-10">

<div class="pageTitle__wrapper grid-2 grid-1-m">
	<div class="pageTitle__header w-70 -mr-13 -mr-0-l w-90-l">
		<h2 class="blurIn">Tajniki dbania o samochód</h2>
	</div> 
	<div class="pageTitle__content w-70 w-100-l">
		<div class="-mt-2 blurIn delay-05">Nasz serwis to miejsce, w którym znajdziesz wiele cennych informacji, porad i wskazówek, które pomogą Ci w dbaniu o swoje auto, zminimalizowaniu kosztów napraw i poprawieniu bezpieczeństwa jazdy.</div>
	</div>
</div>

<div class="news__block -mt-13">
	<?php
if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
    $paged = get_query_var('page');
} else {
    $paged = 1;
}
  
$custom_query_args = array(
    'post_type' => 'post', 
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
	<div class="news__item blurIn delay-1 news__<?php echo $i ?>">
		<a class="" href="<?php the_permalink() ?>">
        <article class="news__article position-relative">
			<div class="news__image">
				<?php the_post_thumbnail( ); ?>
			</div>
			<div class="news__content blurIn">
				<a class="badge text-underline"><?php echo $category_name; ?></a>
				<h5 class="text-white post-title font-bold -fs-20"><a class="text-white" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				<div class="news__btn">
					<a class="blog__more" href="<?php the_permalink() ?>">Przeczytaj całość –</a> 
				</div>
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

		<div class="grid-3 -gap-2 -mt-13 -mb-10 grid-2-m grid-1-s">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<div class="mb-4">

				<div class="blog__card h-100 blurIn">

				<?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>
					</a>
				<?php endif; ?>

				<div class="card__body d-flex flex-column">

					<?php bootscore_category_badge(); ?>

					<a class="text-body text-decoration-none" href="<?php the_permalink(); ?>">
					<?php the_title('<h2 class="blog-post-title">', '</h2>'); ?>
					</a>

					<p class="card-text mt-auto">
					<a class="blog__more -mt-2" href="<?php the_permalink(); ?>">
						<?php _e('Przeczytaj całość –', 'bootscore'); ?>
					</a>
					</p>

					<?php bootscore_tags(); ?>

				</div>

				</div>

			</div>

			<?php endwhile; ?>
		<?php endif; ?>

		</div>

		<footer class="entry-footer">
		<?php bootscore_pagination(); ?>
		</footer>

    </main>

  </div>
</div>
<?php
get_footer();
