jQuery(document).ready(function() {
	loginHandler();
	forgotHandler();
});


function loginHandler(){
	$('#login').submit(function(e){
		e.preventDefault();
		$this = $(this);
		$.ajax ({
		    url: $this.attr('action'),
		    type: "POST",
		    data: $this.serialize(),
		    success: function (json, status){
		    	displayMsg(json.msg);
		    	redirect(json.redirect);
		    }
		});
		return false;
	});
}

function forgotHandler(){
	$('#forgot').click(function(e){
		e.preventDefault();
		$this = $(this);
		$.ajax ({
		    url: $("#forgotForm").attr('action'),
		    type: "POST",
		    data: {
		    	"email":$('[name="email"]').val(),
		   	},
		    success: function (json, status){
		    	displayMsg(json.msg);
		    }
		});
		return false;
	});
}