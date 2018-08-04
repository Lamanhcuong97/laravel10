$(document).ready(function(){
	 $('.modal').on('hidden.bs.modal', function(e){ 
	     $('form').trigger("reset");
	  }) ;
	$('.btn-add-cart').on('click', function(){
		id = $(this).data('id');
		var color = $('.choose-color').length;
		var size = $('.choose-size').length;
		color_id = $('.choose-color').attr('colorId');
		size_id = $('.choose-size').attr('sizeId');
		qty = $('#qty').val();
		if (color != 0 && size != 0) {
			$.ajax({
				type: 'post',
	            url:'/carts',
	            data: {id:id, color_id:color_id, size_id:size_id, qty:qty},
	            success: function(response){
	                // console.log(response);
	                if (response.success != null) {
	                	toastr.success('SUCCESSFULLY ADDED TO CARTs ')
		                var count = parseInt(qty)+ parseInt($('#count').text());
		                $('#count').html(count);
	                }else{
	                	toastr.error('Số lượng trong kho không đủ ');
	                }
	                // location.reload();
	            }
			});
		}
	})

	$('.btn-del-cart').on('click', function(){
		id = $(this).data('id');
		$.ajax({
			type: 'delete',
            url:'/carts/' +id,
            success: function(response){
                // console.log(response);
                location.reload();
            }
		});
	})

	$('.btn-down').on('click', function(){
		rowId = $(this).data('id');
		$.ajax({
			type: 'post',
            url:'/carts/minus',
            data:{rowId:rowId},
            success: function(response){
                // console.log(response);
                location.reload();
            }
		});
	})

	$('.btn-up').on('click', function(){
		rowId = $(this).data('id');

		$.ajax({
			type: 'post',
            url:'/carts/plus' ,
            data:{rowId:rowId},
            success: function(response){
                // console.log(response);
                location.reload();
            }
		});
	})

	$('.btn-clear-cart').on('click', function(e){
		e.preventDefault();
		$.ajax({
			type: 'post',
            url:'/carts/clear' ,
            success: function(response){
                // console.log(response);
                location.reload();
            }
		});
	})

	$('.list-color').on('click', function(){
		var colors = $('.list-color');
		for (var i = colors.length - 1; i >= 0; i--) {
			colors.eq(i).removeClass('choose-color');
		}
		$(this).addClass('choose-color');
		color_id = $(this).attr('colorId');
		product_id = $(this).attr('productId');
		$.ajax({
			type: 'post',
            url:'color/sizes' ,
            data:{color_id:color_id, product_id: product_id},
            success: function(response){
            	$('.list-size').remove();
               for (var j = 0; j < response.length; j++) {
            		$('.options-swatch--size').append('<li class="list-size" sizeId= "'+response[j].id+'" productId= '+response[j].product_id+'">'+response[j].name+'</li>');
            	}
                // location.reload();
            }
		});
		if ( $('.choose-size').length != 0) {
			$('.btn-add-cart').attr('disabled', false);
		}
	})

	$(document).on('click','.list-size', function(){
		var sizes = $('.list-size');
		for (var i = sizes.length - 1; i >= 0; i--) {
			sizes.eq(i).removeClass('choose-size');
		}
		$(this).addClass('choose-size');
		if ( $('.choose-color').length != 0) {
			$('.btn-add-cart').attr('disabled', false);
		}
	})



	

});