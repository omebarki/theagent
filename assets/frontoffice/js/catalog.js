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

	$('.productColumn').click(function() {
		var elem = $(this);
		if ( $("#productDetails").hasClass('active') ) {
			$("#productDetails").removeClass('active');
			$("#detailsArrow").remove();
			setTimeout(function(){
				showProductColumn(elem);
			}, 300);
		} else {
			showProductColumn(elem);
		}
	});
	$('#productDetails a.close').click(function() {
		$("#productDetails").removeClass('active');
		$("#productDetails").hide(200);
		$("#detailsArrow").remove();
	});
	
	$('#addFullSale').click(function() {
		$("#addSuccess").show(0);
		$("#addSuccess").position({
			my: "right top+20",
			at: "right center",
			of: $(this),
			collision: "flipfit flipfit",
			within: $(window)
		});
		$("#addSuccess").addClass('active'); //needed for the animation effect
	});
	$('#planSalesButton').click(function(){
		$('#planSalesForm').slideDown();
	});
	$('#addSuccess a.close').click(function() {
		$("#addSuccess").hide(200);
		$("#addSuccess").removeClass('active');
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
	$('#productList').find('.col-lg-3').removeClass('col-lg-3 col-md-4').addClass('col-lg-2 col-md-3');
	$('.rowFilter').find('.active').removeClass('active');
	$(this).addClass('active');
});
$('.showLess').click(function() {
	$('#productList').find('.col-lg-2').removeClass('col-lg-2 col-md-3').addClass('col-lg-3 col-md-4');
	$('.rowFilter').find('.active').removeClass('active');
	$(this).addClass('active');
});

function showProductColumn(elem) {
	$("#productDetails").show(0);
	$("#productDetails").position({
		my: "left+20 top+50",
		at: "left top",
		of: elem,
		collision: "flipfit flipfit",
		within: $(window),
		using: function (position, feedback) {
			$(this).css(position);
			$("<div>")
				.addClass(feedback.vertical)
				.addClass(feedback.horizontal)
				.html("<i class='upArrow'></i>")
				.attr('id','detailsArrow')
				.appendTo(this);
		}
	});
	$("#productDetails").addClass('active'); //needed for the animation effect
}