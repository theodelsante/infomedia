$(document).ready(function() {

  /* blockCarouselResize */
  // blockCarouselResize();
  // window.onresize = function(event) {
  //   blockCarouselResize();
  // };

  /* Isotope */
  var $grid = $('.grid').isotope({
    itemSelector: '.grid-item'
  });
  // bind filter button click
  $('.filters-button-group').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  });

  /* ListNews */
  $('#afficher_plus').click(function() {
    $('#isotopesup').css('height', 'auto');
    $(this).find('h3').css('display', 'none');
    $('#up_button').css('display', 'block');
  });

  $('#up_button').click(function() {
    $(document.body).animate({
     'scrollTop':0
   }, 1000);
  });

  /* Build */
  setTimeout(function() {
    $('.ribbon').addClass('active');
  }, 500);
});

// function blockCarouselResize() {
//   var maxH = 500;
//   $('#myCarousel img').each(function() {
//     var imgH = $(this).height();
//     alert('h : '+imgH);
//     if (imgH < maxH) {
//       maxH = imgH;
//     }
//   });
//   $('.carousel .item').css('max-height', maxH);
// }