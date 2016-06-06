$(document).ready(function($){
	$("#contact").submit(function(){
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/review",
			data: str,
			success: function(msg){
				document.getElementById('ok' ).style.display = 'block';
				$("#fields").hide();
				/*location.reload();*/
			}
		});
		return false;
	});
});