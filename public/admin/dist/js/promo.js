$('.modal').on('hidden.bs.modal', function(e){ 
       $('form').trigger("reset");
    }) ;

var table_category = $('#categories-table').DataTable({
    processing: true,
    serverSide: true,
    orders: [],
    ajax: 'data/categories',
    columns: [
        { data: 'name', name: 'name' },
        { data: 'description', name: 'description' },
        { data: 'created_at', name: 'created_at' },
        { data: 'action' , name: 'action'}
    ]
});

$('#categories-table').on('click','.btn-del-cat', function(){
    // var r = confirm ('Bạn có muốn xóa bài viết này không ???')
    swal({
      title: "Bạn có muốn xóa danh mục?",
      text: "Danh mục sẽ bị xóa và không thể khôi phục lại!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        id = $(this).data('id');
        $.ajax({
            type: 'delete',
            url: 'category/'+ id,
            success: function(response){
                table_category.ajax.reload();
                toastr.success('Xóa danh mục thành công!!!')
            }
        })
      } else {
        toastr.info('Hủy thao tác')
      }
    });
});

$(document).on('click','.btn-create-category', function(){


  $("#form-create-category").submit(function(e){
      e.preventDefault();
  });
  name = $('#name').val();
  slug = $('#slug').val();
  description = CKEDITOR.instances.description.getData();
  parent_id = $('#parent_id').val();
  $.ajax({
      type: 'post',
      url: 'category',
      data: {name:name, slug:slug, description:description, parent_id:parent_id},
      success: function(response){
         $('#modal-create-category').modal('hide');
        table_category.ajax.reload();
        console.log(response);                    
      }
  });

       
    });

$(document).on('click','.btn-add-category', function(e){
		e.preventDefault();
      $('#modal-create-category').modal('show');
    })



$(document).on('click','.btn-edit', function(){
      $('#modal-edit-category').modal('show');
      id = $(this).data('id');
      $('.btn-update-category').attr('data-id', id);
      $.ajax({
          type: 'get',
          url: 'category/'+ id +'/edit',
          success: function(response){
            $('#name_edit').val(response.name);
            $('#slug_edit').val(response.slug);
            description_edit.setData(response.description);
            $('#category_'+response.parent_id).attr("selected","selected");
          }
      })
     
    })

    $(document).on('click','.btn-update-category', function(e){
          e.preventDefault();
       swal({
          title: "Bạn có muốn cập nhật chi tiết?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            name = $('#name_edit').val();
            slug = $('#slug_edit').val();
            description = CKEDITOR.instances.description_edit.getData();
            parent_id = $('#category_edit').val();
            $.ajax({
                type: 'put',
                url:'category/' + id ,
                data: {name:name, slug:slug,description:description, parent_id:parent_id},
                success: function(response){
               //  	 if ($errors->any()){
              	// 		foreach ($errors->all() as $error){
              	// 			toastr.error("{{$error}}");
              	// 		}
                 		
             		// }
          
             	 console.log(response);    
                  $('#modal-edit-category').modal('hide');
                  table_category.ajax.reload();
                  console.log(response);                    
                }
            });
    
          } else {
            toastr.info('Hủy thao tác')
          }
        });
      
       
    });

  $( "#name" ).keyup(function() {
      name = $('#name').val();
      $.ajax({
            type: 'get',
            url: app_url+ 'admin/products/slug/'+name,
            success: function(response){
                $('#slug').val(response);
                
            }
        })
  });


  $( "#name_edit" ).keyup(function() {
      name = $('#name_edit').val();
      $.ajax({
            type: 'get',
            url: app_url+ 'admin/products/slug/'+name,
            success: function(response){
                $('#slug_edits').val(response);
                
            }
        })
  });
