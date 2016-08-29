$('.btn-del').on('click', function(){
        var id = $(this).attr('data-id');
        console.log(id);

		if (confirm("Вы действительно хотите удалить отзыв?" , "Удалить отзыв"))
		{
			$.ajax({
			type: "POST",
			url: "/admin/review-delete/",
			data: ({id:id}),
			success:function(data){
				location.reload();
				}
			}); 
		}
});

$('.btn-upd').on('click', function(){
        var     id = $(this).attr('data-id');
		if (confirm("Вы действительно хотите подтвердить отзыв?"))
		{
			$.ajax({
			type: "POST",
			url: "/admin/review-update/",
			data: ({id:id}),
			success:function(data){
					location.reload();
				}
			}); 
		}
});