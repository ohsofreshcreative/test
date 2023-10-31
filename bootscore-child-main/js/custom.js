jQuery(function ($) {

      document.addEventListener( 'wpcf7mailsent', function( event ) {
    // Ukryj formularz po wysłaniu
    document.querySelector('.contact-form').style.display = 'none';

    // Wyświetl div z podziękowaniem
    document.querySelector('.thank-you-message').style.display = 'block';
  }, false );

}); // jQuery End
