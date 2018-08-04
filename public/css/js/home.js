$(document).ready(function(){
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
                url: app_url+ 'login',
                data: {email:email, password:password},
                success: function(response){
                    console.log(response);
                }
            })
   		
		}

	});
})