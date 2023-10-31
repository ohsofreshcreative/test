<?php

require_once 'aq_resizer.php'; 

// style and scripts
add_action('wp_enqueue_scripts', 'bootscore_child_enqueue_styles');
function bootscore_child_enqueue_styles() {

  // style.css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // Compiled main.css
  $modified_bootscoreChildCss = date('YmdHi', filemtime(get_stylesheet_directory() . '/css/main.css'));
  wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array('parent-style'), $modified_bootscoreChildCss);

  // custom.js
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/custom.js', false, '', true);
}

/*--- CUSTOM FIELDS ---*/

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/title' );
    register_block_type( __DIR__ . '/blocks/image' );
    register_block_type( __DIR__ . '/blocks/txt-img' );
    register_block_type( __DIR__ . '/blocks/button' );
    register_block_type( __DIR__ . '/blocks/headtext' );
    register_block_type( __DIR__ . '/blocks/baner-opis' );
    register_block_type( __DIR__ . '/blocks/cta-bg' );
    register_block_type( __DIR__ . '/blocks/offer-boxes' );
    register_block_type( __DIR__ . '/blocks/opis-img-product' );
    register_block_type( __DIR__ . '/blocks/phones-benefits' );
    register_block_type( __DIR__ . '/blocks/partners' );
}

// Remove <p> and <br/> from Contact Form 7
add_filter('wpcf7_autop_or_not', '__return_false');


// CUSTOM GUTENBERG CATEGORY 

add_filter( 'block_categories_all' , function( $categories ) {

    // Adding a new category.
	$categories[] = array(
		'slug'  => 'projekt',
		'title' => 'Projekt'
	);

	return $categories;
} );