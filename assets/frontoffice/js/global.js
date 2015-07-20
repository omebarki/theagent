function adjustModalMaxHeightAndPosition(){
  $('.modal').each(function(){
    if($(this).hasClass('in') == false){
      $(this).show();
    };
    var contentHeight = $(window).height() - 60;
    var headerHeight = $(this).find('.modal-header').outerHeight() || 2;
    var footerHeight = $(this).find('.modal-footer').outerHeight() || 2;

    $(this).find('.modal-content').css({
      'max-height': function () {
        return contentHeight;
      }
    });

    $(this).find('.modal-body').css({
      'max-height': function () {
        return (contentHeight - (headerHeight + footerHeight));
      }
    });

    $(this).find('.modal-dialog').css({
      'margin-top': function () {
        return -($(this).outerHeight() / 2);
      },
      'margin-left': function () {
        return -($(this).outerWidth() / 2);
      }
    });
    if($(this).hasClass('in') == false){
      $(this).hide();
    };
  });
};

// animate image move to quote cart
function flyImageToFavs(saleID) {
  var $originalImage = $('#img_' + saleID); // if added from list
  if (!$originalImage.length)
    $originalImage = $(this).closest('img');
  
  var $flyImage = $originalImage.clone();
  var flyImageOffsetOriginal = $originalImage.offset();

  if ($flyImage.size())
    $flyImage.css({'position': 'absolute', 'top': flyImageOffsetOriginal.top, 'left': flyImageOffsetOriginal.left});

  var flyImageOffset = $flyImage.offset();
  
  var brandsBlockOffset = $('#loveBrandsButton').offset();

  // Check if everything is in place for the animation
  if (brandsBlockOffset != undefined && $flyImage.size()) {
    $flyImage.appendTo('body');
    $flyImage.css({ 'position': 'absolute', 'top': $flyImage.css('top'), 'left': $flyImage.css('left'), 'z-index': 5000, 'width': $originalImage.attr('width'), 'height':'auto' })
    .animate({ 'width': $originalImage.attr('width')*0.20, 'height': $originalImage.attr('height')*0.20, 'opacity': 0.2, 'top': brandsBlockOffset.top + 30, 'left': brandsBlockOffset.left + 15 }, 1000)
    .fadeOut(100);
  } 
}

function triggerLoveBrands() {
  var brandsList = $('#loveBrandList');
  
  if ( $(brandsList).hasClass('active') ) {
    $(brandsList).removeClass('active');
  } else {
    $(brandsList).addClass('active');
  }
}

$(window).resize(adjustModalMaxHeightAndPosition).trigger("resize");

window.onload = function () {
  $('.selectpicker').selectpicker();
  $('.datepicker').datepicker({
    orientation:"auto",
  });
  //$(".lovedBrands").owlCarousel();

  $('.lovedBrands').owlCarousel({
    margin: 15,
    responsiveClass: true,
    nav: true,
    navText: [
      "<i class='fa fa-chevron-left fa-2x'></i>",
      "<i class='fa fa-chevron-right fa-2x'></i>"
    ],
    responsive: {
      0: {
        items: 1
      },
      500: {
        items: 2
      },
      768: {
        items: 3,
        margin: 20
      },
      992: {
        items: 4
      },
      1200: {
        items: 6
      }
    }
  })


};

$(document).ready(function() {
  
  //init the favorite click icon
  $('a.addToFavorites').click( function(event) {
    if ( $(this).hasClass('active') ) {
      // remove maybe - donno
    } else {
      var saleID = $(this).attr('data-sale');
      $(this).addClass('active');
      flyImageToFavs(saleID);
    }
  });
  
  $('a#loveBrandsButton').click(function(){
    triggerLoveBrands();
  });
  
});