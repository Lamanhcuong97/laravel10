$('.modal').on('hidden.bs.modal', function(e){ 
       $('form').trigger("reset");
    }) ;
var tbale_sizes = $('#sizes-table').DataTable({
    processing: true,
    serverSide: true,
    orders: [],
    ajax: 'data/sizes',
    columns: [
        { data: 'name', name: 'name' },
        { data: 'country', name: 'country' },
        { data: 'created_at', name: 'created_at' },
        { data: 'action' , name: 'action'}
    ]
});


$(document).on('click','.btn-create-size', function(){


  $("#form-create-size").submit(function(e){
      e.preventDefault();
  });
  name = $('#name').val();
  country = $('#country').val();

  $.ajax({
      type: 'post',
      url: 'sizes',
      data: {name:name,country:country},
      success: function(response){
         $('#modal-create-size').modal('hide');
        tbale_sizes.ajax.reload();
        $('#name').val('');
        $('#country').val('');
        // console.log(response);                    
      }
  });

       
    });

$(document).on('click','.btn-add-size', function(e){
		e.preventDefault();
      $('#modal-create-size').modal('show');
    })



$(document).on('click','.btn-edit-size', function(){
      $('#modal-edit-size').modal('show');
      id = $(this).data('id');
      $('.btn-update-size').attr('data-id', id);
      $.ajax({
          type: 'get',
          url: 'sizes/'+ id +'/edit',
          success: function(response){
            $('#name_edit').val(response.name);
            $('#ccountry_edit').attr('value',  response.country);
            
          }
      })
     
    })

    $(document).on('click','.btn-update-size', function(e){
          e.preventDefault();
       swal({
          title: "Bạn có muốn cập nhật kích thước???",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            name = $('#name_edit').val();
            country = $('#country_edit').val();
            
            $.ajax({
                type: 'put',
                url:'sizes/' + id ,
                data: {name:name, country:country},
                success: function(response){
               //  	 if ($errors->any()){
              	// 		foreach ($errors->all() as $error){
              	// 			toastr.error("{{$error}}");
              	// 		}
                 		
             		// }
          
             	 // console.log(response);    
                  $('#modal-edit-size').modal('hide');
                  tbale_sizes.ajax.reload();
                  // console.log(response);                    
                }
            });
    
          } else {
            toastr.info('Hủy thao tác')
          }
        });
      
       
    });


    $(document).on('click','.btn-del-size', function(){
        // var r = confirm ('Bạn có muốn xóa bài viết này không ???')
        swal({
          title: "Bạn có muốn xóa size này không?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            $.ajax({
                type: 'delete',
                url:'sizes/'+ id,
                success: function(response){
                    tbale_sizes.ajax.reload();
                    toastr.success('Xóa kích thước thành công!!!')
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });

 


  
