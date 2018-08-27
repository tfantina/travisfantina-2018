//this script uses jQuery to update the DOM as the user moves the color sliders
(function($) {

  //creates live reloading when the site title is changed
  wp.customize('blogname', function (value) {
    value.bind( function(newVal) {
      $('h1').html(newVal);
    });
  });

  //creates live reloading when background is changed
  wp.customize('background_color', function( value ) {
    value.bind( function( newVal ) {
      $( 'body' ).css('background-color', newVal);
    });
  });

  //live reloading for font color changes
  wp.customize('text_color', function(value) {
    value.bind(function(newVal) {
      $('body, h1, h2, h3, h2>a, a, .fa').css('color', newVal);
      $('.navbar-light, .navbar-toggler, h1, .navbar').css('border-color', newVal);
    });
  });

})( jQuery );
