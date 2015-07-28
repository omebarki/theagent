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

function toggleLoveBrands() {
  var brandsList = $('#loveBrandList');
  
  if ( $(brandsList).hasClass('active') ) {
    $(brandsList).removeClass('active');
  } else {
    $(brandsList).addClass('active');
  }
}

$(window).resize(adjustModalMaxHeightAndPosition).trigger("resize");

window.onload = function () {
  //-----------------------------CONFS---------------------------------
  owlConf = {
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
  };
  dPickerConf = {
    orientation:"auto",
  };
  //-------------------------------EXTENDS------------------------------

  $('.selectpicker').selectpicker();
  $('.datepicker').datepicker(dPickerConf);
  $('.lovedBrands').owlCarousel(owlConf);
};

$(document).ready(function() {
  $('a#loveBrandsButton').click(function(){
    toggleLoveBrands();
  });
  $('.datepicker').on('changeDate', function(e){
    var $this = $(this),
        name  = $this.attr('name').split('_'),
        $dt   = $('[name="'+name[0]+'"]');
    if($dt.length === 0){
      $dt = $('<input type="hidden" name="'+name[0]+'"/>').insertAfter($this);
    }
    $dt.val(e.format(0,'yyyy-mm-dd'));
  });
});