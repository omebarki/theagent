$(document).ready(function() {
	//init the favorite click icon
	$('a.addToFavorites').click( function(event) {
		if ( $(this).hasClass('active') ) {
			// remove maybe - donno
		} else {
			var catalog_id = $(this).attr('data-catalog');
			$(this).addClass('active');
			flyImageToFavs(catalog_id);
		}
	});
  
	// init the tooltip for products
	$('.productColumn').tooltipster({
		contentAsHTML: true,
		touchDevices: true,
		trigger: 'click',
		theme: 'tooltipster-light',
		position: 'bottom',
		offsetY: -100,
		content: $('<span><img src="my-image.png" /> <strong>This text is in bold case !</strong></span>')
	});
  
});

// animate image move to quote cart
function flyImageToFavs(catalog_id) {
  var $originalImage = $('#img_' + catalog_id); // if added from list
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
  sendAjax('/frontoffice/catalog/addWish/'+catalog_id,{},function (json, status){
      if(json.idCatalog == catalog_id){
        $('.owl-carousel').trigger('add.owl.carousel', $(json.item));
      }
  });
}

/* change the view */
$('.showMore').click(function() {
	$('#productList').find('.col-md-4').removeClass('col-md-4').addClass('col-md-2');
	$('.rowFilter').find('.active').removeClass('active');
	$(this).addClass('active');
});
$('.showLess').click(function() {
	$('#productList').find('.col-md-2').removeClass('col-md-2').addClass('col-md-4');
	$('.rowFilter').find('.active').removeClass('active');
	$(this).addClass('active');
});