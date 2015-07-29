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

function removeWish(catalog_id, index){
  sendAjax('/frontoffice/catalog/remWish/'+catalog_id,{},function (json, status){
      if(json.idCatalog == catalog_id){
        $('.owl-carousel').trigger('remove.owl.carousel', index);
        $favs = $('.mainContainer a.addToFavorites.active');
        if($favs.length !== 0){
          $favs.find('[data-catalog="'+catalog_id+'"]').removeClass('active').addClass('inactive');
        }
      }
  });
}

$(window).resize(adjustModalMaxHeightAndPosition).trigger("resize");
//-----------------------------CONFS---------------------------------
window.onload = function () {
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
  }
  dPickerConf = {
    orientation:"auto",
  };
    //-------------------------------EXTENDS------------------------------
 $('.selectpicker').selectpicker();
 $('.datepicker, .input-group.date').datepicker(dPickerConf);
 $('.lovedBrands').owlCarousel(owlConf);
  
 $('li.dropdown.selections a').on('click', function (event) {
		$(this).parent().toggleClass("open");
 });
 $('body').on('click', function (e) {
		if (!$('li.dropdown.selections').is(e.target) && $('li.dropdown.selections').has(e.target).length === 0 && $('.open').has(e.target).length === 0) {
			$('li.dropdown.selections').removeClass('open');
		}
 });
	
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
  $('.lovedBrands a.addToFavorites').on('click',function(event) {
    var $this      = $(this);
    if($this.hasClass('active')){
      var catalog_id = $this.attr('data-catalog'),
          index      = $this.parent().parent().index();
      $(this).removeClass('active').addClass('inactive');
      removeWish(catalog_id,index);
    }
  });
});