function displayResponse(json){
	displayMsg(json.msg);
	if(json.redirect != undefined){
		redirect(json.redirect);
	}
}

function displayMsg(msg){
	if(msg != undefined){
		for(var type in msg){
			$('.'+type).html('');
			var spanClass = 'has-'+type.split('_').pop();
			for(var field in msg[type]){
				$('.'+type).append('<div class="'+spanClass+'"><span class="help-block">'+msg[type][field]+'</span></div>');
				$('[name="'+field+'"]').parent().addClass(spanClass);
			}
		}
	}
}

function redirect(redirect){
	if(redirect){
		document.location.href=redirect;
	}
}

function sendAjax(route, data, callback){
	if(callback == undefined){
		callback = displayResponse;
	}
	$.ajax ({
	    url: route,
	    type: "POST",
	    data: data,
	    success: callback
	});
}