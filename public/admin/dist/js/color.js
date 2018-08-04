$('.modal').on('hidden.bs.modal', function(e){ 
       $('form').trigger("reset");
    }) ;
var table_color = $('#colors-table').DataTable({
    processing: true,
    serverSide: true,
    orders: [],
    ajax: 'data/colors',
    columns: [
        { data: 'name', name: 'name' },
        { data: 'code_color', name: 'code_color' },
        { data: 'action' , name: 'action'}
    ]
});


$(document).on('click','.btn-create-color', function(){


  $("#form-create-color").submit(function(e){
      e.preventDefault();
  });
  name = $('#name').val();
  code_color = $('#color').val();

  $.ajax({
      type: 'post',
      url: 'colors',
      data: {name:name,code_color:code_color},
      success: function(response){
         $('#modal-create-color').modal('hide');
        table_color.ajax.reload();
        $('#name').val('');
        $('#color').val('');
        // console.log(response);                    
      }
  });

       
    });

$(document).on('click','.btn-add-color', function(e){
		e.preventDefault();
      $('#modal-create-color').modal('show');
    })



$(document).on('click','.btn-edit-color', function(){
      $('#modal-edit-color').modal('show');
      id = $(this).data('id');
      $('.btn-update-color').attr('data-id', id);
      $.ajax({
          type: 'get',
          url: 'colors/'+ id +'/edit',
          success: function(response){
            $('#name_edit').val(response.name);
            $('#color_edit').attr('value',  response.code_color);
            
          }
      })
     
    })

    $(document).on('click','.btn-update-color', function(e){
          e.preventDefault();
       swal({
          title: "Bạn có muốn cập nhật màu???",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            name = $('#name_edit').val();
            code_color = $('#color_edit').val();
            
            $.ajax({
                type: 'put',
                url:'colors/' + id ,
                data: {name:name, code_color:code_color},
                success: function(response){
               //  	 if ($errors->any()){
              	// 		foreach ($errors->all() as $error){
              	// 			toastr.error("{{$error}}");
              	// 		}
                 		
             		// }
          
             	 // console.log(response);    
                  $('#modal-edit-color').modal('hide');
                  table_color.ajax.reload();
                  // console.log(response);                    
                }
            });
    
          } else {
            toastr.info('Hủy thao tác')
          }
        });
      
       
    });


    $(document).on('click','.btn-del-color', function(){
        // var r = confirm ('Bạn có muốn xóa bài viết này không ???')
        swal({
          title: "Bạn có muốn xóa màu này không?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            $.ajax({
                type: 'delete',
                url:'colors/'+ id,
                success: function(response){
                    table_color.ajax.reload();
                    toastr.success('Xóa ảnh thành công!!!')
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });

 


  
