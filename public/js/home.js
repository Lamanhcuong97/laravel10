$(document).ready(function(){
	$('.modal').on('hidden.bs.modal', function(e){ 
	     $('form').trigger("reset");
	  }) ;
	$('.btn-login').on('click', function(){
		var email = $('#email').val();
		var password = $('#password').val();
		if(email == ""){
			toastr.error('Vui lòng nhập địa chỉ email')
		}else if(password == ""){
			toastr.error('Vui lòng nhập mật khẩu')
		}else{
			$.ajax({
                type: 'post',
                url: app_url+ 'loginAjax',
                data: {email:email, password:password},
                success: function(response){
                }
            })
   		
		}

	});

	
	$('.quick-view').on('click', function(){
		slug = $(this).attr('slug');
		$('.product-info__title').html('');
    	$('.price-box__new').html('');
    	$('.product-info__description__text').html('');
		$('.options-swatch--color').html('');
		$('.options-swatch--size').html('');
    	$('.product-main-image__item').html('');
		$.ajax({
			type: 'get',
            url:app_url+'products/quickview/'+slug ,
            success: function(response){
            	console.log(response);
            	$('.product-info__title').append('<h2>'+response.product.name+'</h2>');
            	$('.price-box__new').append(Number(response.product.price.toFixed(1)).toLocaleString());
            	$('.product-info__description__text').append(response.product.content);
            	for (var i = 0; i < response.colors.length; i++) {
            		$('.options-swatch--color').append('<li class="list-color" style="background: '+response
            			.colors[i].code_color+'" productId= '+response.colors[i].product_id+'"></li>');
            	}
            	for (var j = 0; j < response.sizes.length; j++) {
            		$('.options-swatch--size').append('<li class="list-size"  productId= '+response.sizes[j].product_id+'">'+response.sizes[j].name+'</li>');
            	}
            	$('.product-main-image__item').append("<img src="+app_url+response.product.gallery_products[0].link+"  />");
            	$('#brand').attr('src', app_url+response.vendor.thumbnail);
                
            }
		});
	})

	$('.gallery').click(function(){

		url = $(this).attr('src');
		console.log(url);
		$('#product-zoom').attr('src',url );
	})

})