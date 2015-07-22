jQuery(document).ready(function() {
	loginHandler();
	forgotHandler();
});


function loginHandler(){
	$('#login').submit(function(e){
		e.preventDefault();
		$this = $(this);
		sendAjax($this.attr('action'), $this.serialize());
		return false;
	});
}

function forgotHandler(){
	$('#forgot').click(function(e){
		e.preventDefault();
		$this = $(this);
		sendAjax($("#forgotForm").attr('action'), {"email":$('[name="email"]').val()});
		return false;
	});
}