$(document).ready(function() {
	//ADD TO WISHLIST
	$('.mainContainer a.addToFavorites').click( function(event) {
		var $this = $(this);
		if($this.hasClass('inactive')){
			var catalog_id = $this.attr('data-catalog');
			$this.removeClass('inactive').addClass('active');
			flyImageToFavs(catalog_id);
		}
	});

	//SHOW PRODUCT INFOS
	$('.productColumn').click(function() {
		var $this = $(this);
		if ( $("#productDetails").hasClass('active') ) {
			closeActiveWindows();
			setTimeout(function(){
				showProductColumn($this);
			}, 300);
		} else {
			closeActiveWindows();
			showProductColumn($this);
		}
	});
	//CLOSE PRODUCT INFOS
	$('#productDetails a.close').on('click', function() {
		console.log('yo');
		closeActiveWindows();
	});
	
	//???
	$('#addFullSale').click(function() {
		closeActiveWindows();
		$("#addSuccess").show(0).position({
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
		closeActiveWindows();
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

  //AJAX CALL
  sendAjax('/frontoffice/catalog/addWish/'+catalog_id,{},function (json, status){
      if(json.idCatalog == catalog_id){
        $('.owl-carousel').trigger('add.owl.carousel', [$(json.item)]);
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

function showProductColumn($elem) {
	var product_id = $elem.attr('data-id');
	//AJAX CALL
	sendAjax('/frontoffice/catalog/getInfos/'+product_id,{},function (json, status){
	    if(json.idProduct == product_id){
	    	$("#productDetails").html(json.item).show(0);
			$("#productDetails").position({
				my: "left+20 top+50",
				at: "left top",
				of: $elem,
				collision: "flipfit flipfit",
				within: $(window),
				using: function (position, data) {
					$(this).css(position);
					//console.log(data);
					var vertPos = ((data.element.top > data.target.top) ? 'top' : 'bottom');
					var horiPos = ((data.element.left > data.target.left) ? 'left' : 'right');
					$("<div>")
						.addClass(vertPos)
						.addClass(horiPos)
						.html("<i class='upArrow'></i>")
						.attr('id','detailsArrow')
						.appendTo(this);
				}
			});
			$("#productDetails").addClass('active'); //needed for the animation effect
		}
	});
}

// we close all open floating windows
function closeActiveWindows() {
	if( $('.floatWindow.active').length ) {
		$('.floatWindow.active').removeClass('active').hide(200);
		$("#detailsArrow").remove();
	}
}