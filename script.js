// external js: flickity.pkgd.js

var $carousel = $('.carousel').flickity({
  initialIndex: 1
});
var $logger = $('.logger');
var $logger2 = document.getElementById('logger2');

$carousel.on( 'staticClick.flickity', function( event, pointer, cellElement, cellIndex ) {
  // dismiss if cell was not clicked
  if ( !cellElement ) {
    return;
  }
  // change cell background with .is-clicked
  $carousel.find('.is-clicked').removeClass('is-clicked');
  $( cellElement ).addClass('is-clicked');
  $logger.text(cellIndex + 1);
  $logger2.src = ('Cards/image' + ( cellIndex + 1 ) +'.png' );
  $logger2.tag = ( cellIndex + 1 ) ;
});