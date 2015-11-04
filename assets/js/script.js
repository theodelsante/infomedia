$(document).ready(function() {
  // init Isotope
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

  $('.afficher_plus').click(function() {
    $('.isotopesup').css('height', 'auto');
    $(this).css('display', 'none');
    $('#sp').css('display', 'block');
  });

  $('#sp').click(function() {
    $(document.body).animate({
       'scrollTop':0
      }, 1000);
  });


});