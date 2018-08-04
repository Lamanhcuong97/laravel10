$('.modal').on('hidden.bs.modal', function(e){ 
       $('form').trigger("reset");
    }) ;
var table_vendor = $('#vendors-table').DataTable({
    processing: true,
    serverSide: true,
    orders: [],
    ajax: 'data/vendors',
    columns: [
        { data: 'name', name: 'name' },
        { data: 'thumbnail', name: 'thumbnail' },
        { data: 'address', name: 'address' },
        { data: 'phone_number', name: 'phone_number' },
        { data: 'fax', name: 'fax' },
        { data: 'action' , name: 'action'}
    ]
});


$(document).on('click','.btn-create-vendor', function(){


  $("#form-create-vendor").submit(function(e){
      e.preventDefault();
  });
  name = $('#name').val();
  address = $('#address').val();
  phone_number = $('#phone_number').val();
  fax = $('#fax').val();

  var dataVendor = new FormData();
    
//following  code is working fine in for single image upload
    dataVendor.append("thumbnail",$('#thumbnail')[0].files[0]);
    dataVendor.append("name",name);
    dataVendor.append("address",address);
    dataVendor.append("phone_number",phone_number);
    dataVendor.append("fax",fax);

  $.ajax({
      type: 'post',
      url: 'vendors',
      data: dataVendor,
      processData: false,
      contentType: false,
      success: function(response){
         $('#modal-create-vendor').modal('hide');
         $('#form-create-vendor').trigger('reset');
        table_vendor.ajax.reload();
        // $('#name').val('');
        // $('#country').val('');
        // console.log(response);                    
      }
  });

       
    });

$(document).on('click','.btn-add-vendor', function(e){
		e.preventDefault();
      $('#modal-create-vendor').modal('show');
    })



$(document).on('click','.btn-edit-vendor', function(){
      $('#modal-edit-vendor').modal('show');
      id = $(this).data('id');
      $('.btn-update-vendor').attr('data-id', id);
      $.ajax({
          type: 'get',
          url: 'vendors/'+ id +'/edit',
          success: function(response){
            $('#name_edit').val(response.name);
            $('#fax_edit').attr('value',  response.fax);
            $('#address_edit').val(response.address);
            $('#phone_number_edit').attr('value',  response.phone_number);

          }
      })
     
    })

    $(document).on('click','.btn-update-vendor', function(e){
          e.preventDefault();
       swal({
          title: "Bạn có muốn cập nhật nhà sản xuất??",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            name = $('#name_edit').val();
            fax = $('#fax_edit').val();
            address = $('#address_edit').val();
            phone_number = $('#phone_number_edit').val();

        //following  code is working fine in for single image upload
           var data = new FormData();
    
        //following  code is working fine in for single image upload
            // data.append("thumbnail",$('#thumbnail_edit')[0].files[0]);
            data.append("name",name);
            data.append("address",address);
            data.append("phone_number",phone_number);
            data.append("fax",fax);
            if ($('#thumbnail_edit')[0].files[0] != null) {
              data.append("thumbnail",$('#thumbnail_edit')[0].files[0]);
            }
            console.log(data);

            $.ajax({
                type: 'post',
                url:'edit/vendors/' + id ,
                data: data,
                processData: false,
                contentType: false,
                success: function(response){
               //  	 if ($errors->any()){
              	// 		foreach ($errors->all() as $error){
              	// 			toastr.error("{{$error}}");
              	// 		}
                 		
             		// }
                 $('#form-update-vendor').trigger("reset"); 
             	 // console.log(response);    
                  $('#modal-edit-vendor').modal('hide');
                  table_vendor.ajax.reload();
                  // console.log(response);                    
                }
            });
    
          } else {
            toastr.info('Hủy thao tác')
          }
        });
      
       
    });


    $(document).on('click','.btn-del-vendor', function(){
        // var r = confirm ('Bạn có muốn xóa bài viết này không ???')
        swal({
          title: "Bạn có muốn xóa nhà sản xuất này không?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            $.ajax({
                type: 'delete',
                url:'vendors/'+ id,
                success: function(response){
                    table_vendor.ajax.reload();
                    toastr.success('Xóa kích thước thành công!!!')
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });

     $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
          $("#thumbnail").on("change", function(e) {
              var files = e.target.files,
                filesLength = files.length;
                $('.pip').remove();
              for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                  var file = e.target;

                  $("<span class=\"pip\">" +
                    "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                 
                    "</span>").insertAfter(".images-preview");
                  

                  
                });
                fileReader.readAsDataURL(f);
              }
            });
          } else {
            alert("Your browser doesn't support to File API")
          }
        });

 


  
