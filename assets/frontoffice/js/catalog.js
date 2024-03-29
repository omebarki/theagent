$(document).ready(function() {
//----------------------GLOBALS------------------------------------
	list            = $("#catalogList").length > 0
					? "catalog" 
					: "product";
	selector        = "#"+list+"List";
	$list           = $(selector);
	total           = parseInt($list.attr("data-total"));
	inViewPort      = false;
	moreToDisplay   = 1;
	$loader         = $('#loader');
//-------------------------------------------------------------------

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
	$('#productList').on('click','.productColumn', function() {
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
	$('#productDetails').on('click', 'a.close', function() {
		closeActiveWindows();
	});
	//CHANGE PRODUCT IMAGE
	$('#productDetails').on('click', '.productThumbs img', function() {
		var $this   = $(this),
			$active = $this.parent().parent().find('li.active');
		if(!$this.parent().hasClass('active')){
			var pattern = /max_[0-9].jpg/,
				src     = $("#mainImg").attr('src'),
				index   = $this.parent().attr('data-index');
			$active.removeClass('active');
			$this.parent().addClass('active');
			$("#mainImg").attr('src', src.replace(pattern, "max_"+index+".jpg"));
		}
	});
	
	// add the sales to my selections button actions on catalog page
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

	$(window).scroll(handleScroll);
  	
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
			setTimeout(function(){
				$('.owl-carousel').trigger('add.owl.carousel', [$(json.item)]).trigger('refresh.owl.carousel');
			}, 1000);
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

// show product details in a modal style window
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

function handleScroll(){
	var wScroll    = $(this).scrollTop();
    if($loader.length != undefined){
    	var dataOffset    = $(selector+" > div").length;
    	// IF PAGE BOTTOM VISIBLE
		if($loader.is(':in-viewport') && moreToDisplay > 0 && !inViewPort){
			inViewPort = true;
	  	    if($loader.css('display') == 'none'){
	  	    	$loader.fadeIn(200);
	  	    }
	  	    //METHOD + DATA
	  	    var method = "filter"+list.charAt(0).toUpperCase()+list.slice(1),
	  	    	data   = {'offset':dataOffset}
	  	    if(list == "product"){
	  	    	data.id = $list.attr('data-catalog');
	  	    }
	  	    //AJAX CALL
		  	sendAjax('/frontoffice/catalog/'+method,data,function (json, status){
		      	if(json.items !== undefined){
		      		if(json.items.length > 0){
		        		$list.append(json.items.join(''));
		        		moreToDisplay = total - $(selector+" > div").length > 0;
		      		}
		      		if(!moreToDisplay){
			      		$loader.fadeOut(200);
		      		}
		      		inViewPort = false;
		      	}
		  	});
	  	}
    }
}