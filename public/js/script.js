JQuery(document).ready(function($){
	$("#contact").submit(function(){
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "/review/addReview",
			data: str,
			success: function(msg){
				if (msg){
					result = '<div class="good">Спасибо! Ваш отзыв отправлен.</div>';
					$("#fields").hide();
				}
				else {result = msg;}
				$('#note').html(result);
			}
		});
		return false;
	});
	
});