$('.btn-del').on('click', function(){
        var     f = $(this).attr('data-id');   // это уникальный id записи
        console.log(f);

        r = $.ajax({
          type: 'POST',
          url: '/admin/review-delete/',
          data: {id:f},
          dataType: 'html',
		  success:function(data){
				alert(data)
			}
        }); 

        if(r){
                console.log('yyy');
        }
        else{
                console.log('nnn');
        }

                           
});

$('.btn-upd').on('click', function(){
        var     f = $(this).attr('data-id');   // это уникальный id записи
        console.log(f);

        r = $.ajax({
          type: 'POST',
          url: '/admin/review-update/',
          data: {id:f},
          dataType: 'html',
		  success:function(data){
				alert(data)
			}
        }); 

        if(r){
                console.log('yyy');
        }
        else{
                console.log('nnn');
        }

                           
});