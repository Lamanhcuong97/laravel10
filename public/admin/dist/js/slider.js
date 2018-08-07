var close_modal = function(){
      $('.modal').on('hidden.bs.modal', function(e){ 
         $('form').trigger("reset");
      })
    } 

$('.modal').on('hidden.bs.modal', function(e){ 
     location.reload();
  })

$(document).on('click','.btn-add-slider', function(e){
    e.preventDefault();
      $('#modal-create-slider').modal('show');
      
      

        $.ajax({
                type: 'get',
                url:'sliders/list' ,
                success: function(response){
                  console.log(response.length)
                  $('.image').remove();
                  for (var i = response.length - 1; i >= 0; i--) {
                    close_modal();
                      $('.images').append('<div class="image" id="image_'+response[i].id+'"><img src="'+app_url+response[i].link+'" width="120px" height="120px"><button type="button" class="btn-close" data-id="'+response[i].id+'" >&times;</button></div>') 
                  }
                }
            });
    })

$(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
          $("#images_modal").on("change", function(e) {
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

    $(document).on('click','.btn-upload', function(){
          $("#form-upload-images").submit(function(e){
              e.preventDefault();
          });
          var images = $("#images_modal")[0].files;
        
            var data = new FormData();
    
                
            var names = [];
            var file_data = $('#images_modal')[0].files; 
            for(var i = 0;i<file_data.length;i++){
                data.append("image["+i+"]", file_data[i]);
            }
            // entries(data);
          $.ajax({
              type: 'post',
              url: 'sliders',
              data: data,
              cache: false,
              contentType: false,
              processData: false,
              success: function(response){
                $('.pip').remove();
                $('#images_modal').val('');
                $.ajax({
                type: 'get',
                url:'sliders/list' ,
                success: function(response){
                  console.log(response.length)
                  close_modal();
                  $('.image').remove();
                  for (var i = response.length - 1; i >= 0; i--) {
                      $('.images').append('<div class="image" id="image_'+response[i].id+'"><img src="'+app_url+response[i].link+'" width="120px" height="120px"><button type="button" class="btn-close" data-id="'+response[i].id+'" >&times;</button></div>') 
                  }
                }
            });
              }
          });
        
       
    });

    $(document).on('click','.btn-close', function(){
        // var r = confirm ('Bạn có muốn xóa bài viết này không ???')
        swal({
          title: "Bạn có muốn xóa ảnh này không?",
          text: "Ảnh sẽ bị xóa và không thể khôi phục lại!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            $.ajax({
                type: 'delete',
                url:'sliders/' +id,
                success: function(response){
                    $('#image_'+id).remove();
                    toastr.success('Xóa ảnh thành công!!!')
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });
