function displayMsg(msg){
	if(msg != undefined){
		for(var type in msg){
			$('.'+type).html('');
			var spanClass = type.split('_').pop();
			for(var field in msg[type]){
				$('.'+type).append('<p><span class="'+spanClass+'">'+msg[type][field]+'</span></p>');
			}
		}
	}
}

function redirect(redirect){
	if(redirect){
		document.location.href=redirect;
	}
}