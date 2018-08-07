$(document).ready(function(){
    $('.modal').on('hidden.bs.modal', function(e){ 
       $('form').trigger("reset");
    }) ;
       
  var close_modal = function(){
      $('.modal').on('hidden.bs.modal', function(e){ 
       $('form').trigger("reset");
    }) ;
   
    };
    close_modal();

   var options = {
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
       description_modal = CKEDITOR.replace('description_modal', options);
       content_modal = CKEDITOR.replace('content_modal',options);

  
     var format_number =  function format_number(number, prefix, thousand_separator, decimal_separator)
  {
    var   thousand_separator = thousand_separator || ',',
      decimal_separator = decimal_separator || '.',
      regex   = new RegExp('[^' + decimal_separator + '\\d]', 'g'),
      number_string = number.toString().replace(regex, ''),
      split   = number_string.split(decimal_separator),
      rest    = split[0].length % 3,
      result    = split[0].substr(0, rest),
      thousands = split[0].substr(rest).match(/\d{3}/g);
    
    if (thousands) {
      separator = rest ? thousand_separator : '';
      result += separator + thousands.join(thousand_separator);
    }
    result = split[1] != undefined ? result + decimal_separator + split[1] : result;
    return prefix == undefined ? result : (result ? prefix + result : '');
  };
  // Form update Product
  $("#price_modal").keyup(function(e){
      $(this).val(format_number($(this).val()));
  });

 $("#original_price_modal").keyup(function(e){
      $(this).val(format_number($(this).val()));
  });
 // End form 
  
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

    var table = $('#products-table').DataTable({
        processing: true,
        serverSide: true,
        orders: [],
        ajax: 'data',
        columns: [
            { data:'id' , name: 'products.id' },
            { data: 'product_code', name: 'products.product_code' },
            { data: 'name', name: 'products.name' },
            { data: 'original_price', name: 'original_price' },
            { data: 'price', name: 'products.price' },
            { data: 'link', name: 'link' },
            { data: 'action' , name: 'action'}
        ]
    });

 


    $(document).on('click','.btn-del', function(){
        // var r = confirm ('Bạn có muốn xóa bài viết này không ???')
        swal({
          title: "Bạn có muốn xóa sản phẩm ?",
          text: "Sản phẩm sẽ bị xóa và không thể khôi phục lại!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            $.ajax({
                type: 'delete',
                url: 'products/'+ id,
                success: function(response){
                    table.ajax.reload();
                    toastr.success('Xóa sản phẩm  thành công!!!')
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });

    $(document).on('click','.btn-del-cat', function(){
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
                    $('#cat'+id).remove();
                    toastr.success('Xóa danh mục thành công!!!')
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });

    $(document).on('click','.btn-del-sub-cat', function(){
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
                url: app_url+ 'admin/category_sub/'+ id,
                success: function(response){
                    $('#sub_cat_'+id).remove();
                    toastr.success('Xóa danh mục thành công!!!')
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });

    $(document).on('click','.btn-del-tag', function(){
        // var r = confirm ('Bạn có muốn xóa bài viết này không ???')
        swal({
          title: "Bạn có muốn xóa thẻ?",
          text: "Thẻ sẽ bị xóa và không thể khôi phục lại!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            $.ajax({
                type: 'delete',
                url: 'tags/'+ id,
                success: function(response){
                    $('#tag_'+id).remove();
                    toastr.success('Xóa thẻ thành công!!!')
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });
    var table_detail = $('#product_detail-table').DataTable({
        processing: true,
        serverSide: false,

        orders: [],
        ajax: 'data_detail/1',
        columns: [
            { data: 'product_code', name: 'products.product_code' },
            { data: 'name', name: 'products.name' },
            { data: 'color', name: 'color' },
            { data: 'size', name: 'size' },
            { data: 'quantity', name: 'product_details.quantity' },
            { data: 'action' , name: 'action'}
        ]
    });

    $(document).on('click','.btn-detail', function(){
      
      $('#modal-detail-product').modal('show');
      id = $(this).data('id');
      $('.btn-add-detail').data('id', id);


      table_detail.destroy();
 
      table_detail = $('#product_detail-table').DataTable({
        processing: true,
        serverSide: true,
        orders: [],
        ajax: 'data_detail/'+id,
        columns: [
            { data: 'product_code', name: 'products.product_code' },
            { data: 'name', name: 'products.name' },
            { data: 'color', name: 'colors.name' },
            { data: 'size', name: 'sizes.name' },
            { data: 'quantity', name: 'product_details.quantity' },
            { data: 'action' , name: 'action'}
        ]
    });
     
    })

    $(document).on('click','.btn-add-detail', function(){
        $("#form-detail").submit(function(e){
            e.preventDefault();
        });
        id = $(this).data('id');
        quantity = $('#quantity').val();
        color_id = $('#color_id').val();
        size_id = $('#size_id').val();
        discount = $('#discount').val();

        $.ajax({
                type: 'post',
                url: app_url+ 'admin/products/detail/' +id,
                data:{quantity:quantity, color_id:color_id, size_id:size_id, discount:discount},
                success: function(response){
                  console.log(response);
                    table_detail.ajax.reload();
                    $('#form-detail').trigger("reset");
                }
            })
       
    });

    $(document).on('click','.btn-del-detail', function(){
        // var r = confirm ('Bạn có muốn xóa bài viết này không ???')
        swal({
          title: "Bạn có muốn xóa chi tiết?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            $.ajax({
                type: 'delete',
                url: 'products/detail/'+ id,
                success: function(response){
                    table_detail.ajax.reload();
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });

     $(document).on('click','.btn-edit-detail', function(){
      $('#modal-edit-detail').modal('show');
      id = $(this).data('id');
      $('.btn-update-detail').attr('data-id', id);
      $.ajax({
                type: 'get',
                url: 'products/detail/'+ id,
                success: function(response){
                  $('#quantity_detail').val(response.quantity);
                  $('#color_'+response.color_id).attr("selected","selected");
                  $('#size_'+response.size_id).attr("selected","selected");
                  $('#discount').val(response.discount);
                }
            })
     
    })


    $(document).on('click','.btn-update-detail', function(){
         $("#form-update-detail").submit(function(e){
            e.preventDefault();
        });
        swal({
          title: "Bạn có muốn cập nhật chi tiết?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            quantity = $('#quantity_detail').val();
            color_id = $('#color_id_detail').val();
            size_id = $('#size_id_detail').val();
            discount = $('#discount_detail').val();
            $.ajax({
                type: 'put',
                url: 'products/detail/'+ id,
                data:{quantity:quantity, color_id:color_id, size_id:size_id, discount:discount},
                success: function(response){
                  $('#modal-edit-detail').modal('hide');
                    table_detail.ajax.reload();
                }
            })
          } else {
            toastr.info('Hủy thao tác')
          }
        });
    });

    // Click show Modal Detail Product 
     $(document).on('click','.btn-show', function(){
      $('#modal-show-product').modal('show');
      id = $(this).data('id');
      $('.image').remove();
      $('.color-item').remove();
      $('.size-item').remove();
      $('#name').html('');
      $('#price').html('');
      $('#vendor').html('');
      $('#show-description').html('Mô tả : ');
      $('#qty').remove();
      $.ajax({
          type: 'get',
          url: 'products/'+ id,
          success: function(response){
            console.log(response.colors.length );
            $('#image-product').append("<img class= 'image' src='"+app_url+ response.product.gallery_products[0].link+"' style = ' width:100%;'>");
            $('#name').append('<h3>'+response.product.name+'</h3>');
            $('#price').append(format_number(response.product.price));
            $('#show-description').append(response.product.description);
            if (response.vendor) {  
                $('#vendor').append(response.vendor.name);
            }
            $('#show-quantity').append('<b id="qty">'+response.quantity+'</b>');
            for (var i = response.colors.length - 1; i >= 0; i--) {
                $('#list-color').append('<li class="color-item" style="background:'+ response.colors[i].code_color+'; width: 50px; height:50px; " ></li>');
            }

            for (var j = response.sizes.length - 1; j >= 0; j--) {
                $('#list-size').append('<li class="size-item"  >'+ response.sizes[j].name+'</li>');
            }
            
            
          }
      })
     
    })

     // Click show Modal Create Product 
    //  $(document).on('click','.btn-add-post', function(e){
    //   e.preventDefault();
    //   $('#modal-create-product').modal('show');
      
    // })

     

     $(document).on('click','.remove-form-detail', function(e){
        e.preventDefault();
        $(this).parent().parent('div').remove();              

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

        $('.select_tag').select2({
            tags: true,
            tokenSeparators: [","],
            createTag: function (tag) {
                return {
                    id: tag.term,
                    text: tag.term,
                    isNew : true
                };
            },
             multiple: true,
        }).on("select2:select", function(e) {
            if(e.params.data.isNew){
               
                    $(this).find('[value="'+e.params.data.id+'"]').replaceWith('<option selected value="'+e.params.data.id+'">'+e.params.data.text+'</option>');
                    $.ajax({
                        type: 'get',
                        url: app_url+ 'admin/products/slug/'+e.params.data.text,
                        success: function(response){
                            $.ajax({
                            type: 'post',
                            url: app_url+ 'admin/tags',
                            data: {name:e.params.data.text, slug:response},
                            success: function(response){
                                
                            }
                        });
                        }
                    });
                    
                
            }

          }); 

        $(document).on('click','.btn-create-product', function(){
          $("#form_create_product").submit(function(e){
              e.preventDefault();
          });
          name = $('#name').val();
          product_code = $('#product_code').val();
          slug = $('#slug').val();
          original_price = $('#original_price').val();
          price = $('#price').val();
          description = $('#description').val();
          content = $('#content').val();
          tags = $('#tags').val();
          category_id = $('#category_id').val();
          images = $('#images').val();
          quantity = $('#quantity').val();
          color_id = $('#color_id').val();
          size_id = $('#size_id').val();
          $.ajax({
              type: 'post',
              url: app_url+ 'admin/products',
              data: {name:name, product_code:product_code, slug:slug, original_price:original_price,price:price,description:description,content:content,tags:tags, category_id:category_id, images:images,quantity:quantity,color_id:color_id,size_id:size_id},
              success: function(response){
                 $('#modal-create-product').modal('hide');
                table.ajax.reload();
                console.log(response);                    
              }
          });
        
       
    });

    $(document).on('click','.btn-edit', function(){
      $('#modal-edit-product').modal('show');
        $('form').trigger("reset");
      id = $(this).data('id');
       close_modal();
      $('.btn-update-product').attr('data-id', id);
      $.ajax({
          type: 'get',
          url: 'products/'+ id +'/edit',
          data: {
            id:id,
          },
          success: function(response){
            close_modal();
            // console.log(response);
            // console.log(format_number(response.price));
            // console.log(response.description);
            $('#name_modal').val(response.name);
            $('#product_code_modal').val(response.product_code);
            $('#slug_modal').val(response.slug);
            description_modal.setData(response.description);
            content_modal.setData(response.content);
            $('#price_modal').val(format_number(response.price));
            $('#original_price_modal').val(format_number(response.original_price));
            $('#category_'+response.category_id).attr("selected","selected");
            $('#vendor_'+response.vendor_id).attr("selected","selected");
          }
      })
     
    })

    $(document).on('click','.btn-update-product', function(){
      $("#form-update-product").submit(function(e){
          e.preventDefault();
      });
       swal({
          title: "Bạn có muốn cập nhật chi tiết?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            id = $(this).data('id');
            name = $('#name_modal').val();
            product_code = $('#product_code_modal').val();
            slug = $('#slug_modal').val();
            original_price = $('#original_price_modal').val();
            price = $('#price_modal').val();
            description = $('#description_modal').val();
            content = $('#content_modal').val();
            category_id = $('#category_modal').val();
            vendor_id = $('#vendor_modal').val();
            $.ajax({
                type: 'put',
                url:'products/' + id ,
                data: {name:name, product_code:product_code, slug:slug, original_price:original_price,price:price,description:description,content:content, category_id:category_id, vendor_id:vendor_id},
                success: function(response){
                   $('#modal-edit-product').modal('hide');
                  table.ajax.reload();
                  close_modal();
                  console.log(response);                    
                }
            });
    
          } else {
            toastr.info('Hủy thao tác')
          }
        });
      
       
    }); 

    $('#products-table').on('click','.btn-images', function(){
      $('#modal-images').modal('show');
      id = $(this).data('id');
      $('.btn-upload').attr('data-id', id);
      // $('#my-dropzone').attr('action', app_url + 'products/images/'+id);
     
      // Dropzone.options.myDropzone = {
      //   init: function() {
      //     this.on("processing", function(file) {
      //       this.options.url =  app_url + 'products/images/'+id;
      //     });
      //   }
      // };
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

        $.ajax({
                type: 'get',
                url:'products/images/' + id ,
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
                url:'products/images/'+ id,
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



     $(document).on('click','.btn-upload', function(){
          $("#form-upload-images").submit(function(e){
              e.preventDefault();
          });
          id = $(this).data('id');
          var images = $("#images_modal")[0].files;
          color_id = $('#color_id').val();
          // var data = new FormData();
          //   jQuery.each(jQuery('#images_modal')[0].files, function(i, file) {
          //       data.append('file-'+i, file);
          //   });
            var data = new FormData();
            data.append('color_id', color_id);
    
        // //following  code is working fine in for single image upload
        //     var files = $('#images_modal')[0].files[0]; 
        //     fd.append('file',files);

        //   //this code not working for multiple image upload           
            var names = [];
            var file_data = $('#images_modal')[0].files; 
            for(var i = 0;i<file_data.length;i++){
                data.append("image["+i+"]", file_data[i]);
            }
            // entries(data);
          $.ajax({
              type: 'post',
              url: 'products/images/' +id,
              data: data,
              cache: false,
              contentType: false,
              processData: false,
              success: function(response){
                $('.pip').remove();
                table.ajax.reload();
                $('#images_modal').val('');
                $.ajax({
                type: 'get',
                url:'products/images/' + id ,
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

})