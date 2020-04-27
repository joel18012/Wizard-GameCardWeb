// external js: flickity.pkgd.js

var $carousel = $('.carousel').flickity({
  initialIndex: 1
});
var $logger = $('.logger');

$carousel.on( 'staticClick.flickity', function( event, pointer, cellElement, cellIndex ) {
  // dismiss if cell was not clicked
  if ( !cellElement ) {
    return;
  }
  // change cell background with .is-clicked
  $carousel.find('.is-clicked').removeClass('is-clicked');
  $( cellElement ).addClass('is-clicked');
  $logger.text( 'Cell ' + ( cellIndex + 1 )  + ' clicked' );
});