<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>

<footer class="bg-dark-section">

  <div class="bootscore-footer bg-dark -pt-13 -pt-8-xl -pb-8 blurIn">
    <div class="con-main <?= bootscore_container_class(); ?>">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <?php dynamic_sidebar('top footer'); ?>
      <?php endif; ?>

      <div class="row">

        <!-- Footer 1 Widget -->
        <div class="footer__widget col-md-6 col-lg-4 blurIn">
          <?php if (is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div class="footer__widget col-md-6 col-lg-4 blurIn make-footer-widget-ctr">
          <?php if (is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 3 Widget -->
        <div class="footer__widget col-md-6 col-lg-4 blurIn make-footer-widget-end">
          <?php if (is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
          <?php endif; ?>
        </div>

        <!-- Footer 4 Widget -->
        <!-- <div class="footer__widget col-md-6 col-lg-3 blurIn">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
          <?php endif; ?>
        </div> -->

      </div>

      <!-- Bootstrap 5 Nav Walker Footer Menu -->
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer-menu',
        'container'      => false,
        'menu_class'     => '',
        'fallback_cb'    => '__return_false',
        'items_wrap'     => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
        'depth'          => 1,
        'walker'         => new bootstrap_5_wp_nav_menu_walker()
      ));
      ?>

    </div>
  </div>

  <div class="con-main bootscore-info text-muted -pt-6 -pb-6 -pt-4-m -pb-4-m blurIn">
        <div class="container grid-2 grid-1-m -gap-4-m -fs-14-m">
            <p class="j-self-s j-self-s-m">Copyright ©2023 4Motion. All Rights Reserved</p>

            <p class="j-self-e ta-center j-self-s-m">Designed & Developed by <a href="https://www.ohsofresh.pl" title="OhSoFresh"><img class="oh" src="http://abpol.ohsofresh.pl/wp-content/uploads/2023/06/ohsofresh.svg" /></p>
        </div>
    </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/simple-lightbox.js?v2.8.0"></script>
<script>
	(function() {
		var $gallery = new SimpleLightbox('.gallery a', {});
	})();
</script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/flicky.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/reveal.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/menubar.js"></script>
<script>
  	AOS.init({
		startEvent: 'load',
	});
</script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/react/17.0.1/umd/react.production.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/react-dom/17.0.1/umd/react-dom.production.min.js'></script>


<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slidePanel.js"></script>
<?php wp_footer(); ?>

</body>

</html>
