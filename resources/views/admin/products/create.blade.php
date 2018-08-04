@extends('layouts.admin.master')
@section('header')
   <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
   <style type="text/css">
     input[type="file"] {
       display: block;
     }
    .imageThumb {
        max-height: 75px;
        border: 2px solid #7599bda6;
        cursor: pointer;
        border-radius: 10px;
    }
        .pip {
          display: inline-block;
          margin: 10px 10px 0 0;
        }
   </style>
@endsection
@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm sản phẩm
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products Management</a></li>
        <li class="active">Add Products</li>
      </ol>
    </section>
    <script type="text/javascript">
          @if ($errors->any())
              @foreach ($errors->all() as $error)
                 toastr.error("{{$error}}");
              @endforeach
          @endif
      </script>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-8">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" action="{{ route('products.store') }}" method="post" id="form_create_product"  enctype="multipart/form-data">
                {{csrf_field() }}
                <div class="form-group">
                  <label for="">Name <span id = "constraint">*</span></label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name Product" value="{{old('name')}}">
                </div>

                <div class="row form-group">
                  <div class="col-xs-6">
                    <label for="">Code <span id = "constraint">*</span></label>
                    <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter Product Code" value="{{old('product_code')}}">
                  </div>
                  <div class="col-xs-6">
                    <label for="">Slug </label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Title" value="{{old('slug')}}">
                  </div>
                </div>
              
                <div class="row form-group">
                  <div class="col-xs-6">
                    <label for="">Orginal Price (Đơn vị: nghìn đồng)<span id = "constraint">*</span> </label>
                    <input type="text" class="form-control" id="original_price" name="original_price" placeholder="Enter Original Price" value="{{old('original_price')}}">
                  </div>
                  <div class="col-xs-6">
                    <label for=""> Price (Đơn vị: nghìn đồng)<span id = "constraint">*</span></label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" value="{{old('price')}}">
                  </div>
                </div>
               


                <div class="form-group">
                  <label for="">Description <span id = "constraint">*</span></label>
                  <textarea id="description" class="form-control" name="description" placeholder="Enter Description" rows="4" >{{old('description')}}</textarea>
                  <script>
                      var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                      };
                    </script>
                  <script type="text/javascript">
                    CKEDITOR.replace('description',options);
                  </script>
                </div>

                 <div class="form-group">
                  <label for="">Content <span id = "constraint">*</span></label>
                  <textarea id="content" class="form-control" name="content" placeholder="Enter Content" rows="5">{{old('content')}}</textarea>
                  <script>
                      var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                      };
                    </script>
                  <script type="text/javascript">
                    CKEDITOR.replace('content', options);
                  </script>
                </div>
                <div class="col-xs-12" style="margin-top: 24px; "> <button id="add-form-detail" ><span class="glyphicon   glyphicon glyphicon-plus "  style="color: #48bfe4; font-size: 25px"></span></button></div>
                <div class="detail">
                  <div class="row  row-detail">
                    <div class="form-group col-xs-3">
                        <label for=""> Quantity<span id = "constraint">*</span></label>
                        <input type="number" class="form-control" id="quantity" name="quantity[]" placeholder="Enter Price">
                    </div>

                    <div class="form-group col-xs-3">
                      <label>Color <span id = "constraint">*</span></label>
                      <select class=" form-control" name="color_id[]">
                          @foreach($colors as $color)
                            <option value="{{$color->id}}">{!!$color->name!!}</option>
                          @endforeach
                      </select>
                    </div>

                    <div class="form-group col-xs-3">
                      <label for="">Size <span id = "constraint">*</span></label>
                      <select name="size_id[]" id="size_id" class="form-control">
                        @foreach($sizes as $size)
                          <option value="{{$size->id}}">{{$size->name}}</option>
                        @endforeach
                      </select>
                    </div>
                    
                    <div class="col-xs-3 form-group">
                      <button class ="remove-form-detail" ><span class="glyphicon  glyphicon glyphicon-remove  "  style="color: #f90606; font-size: 20px"></span></button>
                    </div>
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary  btn-mdb-color btn-rounded nextBtn-2 float-right">Create Product</button>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-xs-4" >
           <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
        
          
         {{--     <div class="input-group">
               <span class="input-group-btn">
                 <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                   <i class="fa fa-picture-o"></i> Choose
                 </a>
               </span>
               <input id="thumbnail" class="form-control" type="text" name="link">
             </div>
               
                 <script type="text/javascript">
                    $('#lfm').filemanager('file');
                 </script> --}}
                
              <div class="field" align="left">
                <h3>Upload your images</h3>
                <input type="file" id="images" name="images[]" multiple />
              </div>
              <div class="form-group">
                  <label>Tags </label>
                  <select class="select_tag form-control" name="tags[]" multiple="multiple">
                      @foreach($tags as $tag)
                        <option value="{{$tag->id}}">{!!$tag->name!!}</option>
                      @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Vendor</label>
                  <select name="vendor_id" id="vendor" class="form-control" required="required">
                    @foreach($vendors as $vendor)
                      <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group">
                  <label for="">Category</label>
                  <select name="category_id" id="category" class="form-control" required="required">
                    @foreach($categories as $category)
                      <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                  </select>
                </div>
                
            </form>
          </div>
        </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
	{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
	<script type="text/javascript">
		var app_url = '{{ asset('') }}';
	</script>

 
  @section('footer')
     {{-- <script type="text/javascript" src="{{ asset('js/products.js') }}"></script> --}}
     <script type="text/javascript">
      //  $(document).ready(function() {
      //     $('.select_tag').select2();
      // });

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
     
          $('.btn-create-product').on('click', function(){
            name = $('#name').val();
            product_code = $('#product_code').val();
            slug = $('#slug').val();
            original_price = $('#original_price').val();
            console.log(original_price +','+ price +','+ description +','+ content +','+ category_id +','+ tags)
            price = $('#price').val();
            description = $('#description').val();
            content = $('#content').val();
            tags = $('#tags').val();
            category_id = $('#category_id').val();
            quantity = $('#quantity').val();
            color_id = $('#price').val();
            size_id = $('#description').val();
            discount = $('#discount').val();
            $.ajax({
                type: 'post',
                url: app_url+ 'admin/products',
                data: {name:name, product_code:product_code, slug:slug, original_price:original_price,price:price,description:description,content:content,tags:tags, category_id:category_id},
                success: function(response){
                  console.log(response);                    
                }
            });

            $.ajax({
                type: 'post',
                url: app_url+ 'admin/products/detail',
                data: {quantity:quantity, color_id:color_id, size_id:size_id, discount:discount},
                success: function(response){
                    console.log(response);
                }
            });

            $.ajax({
                type: 'get',
                url: app_url+ 'admin/products',
                success: function(response){
                    console.log(response);
                }
            });
          })




            $(document).ready(function() {
              if (window.File && window.FileList && window.FileReader) {
                $("#images").on("change", function(e) {
                  $('.pip').remove();
                  var files = e.target.files,
                    filesLength = files.length;
                  for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                      var file = e.target;
                      $("<span class=\"pip\">" +
                        "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                     
                        "</span>").insertAfter("#images");
                      

                      
                    });
                    fileReader.readAsDataURL(f);
                  }
                });
              } else {
                alert("Your browser doesn't support to File API")
              }
            });

             $(document).on('click','#add-form-detail', function(e){
                e.preventDefault();
                $('.detail').append(' <div class="row row-detail"><div class="form-group col-xs-3"><label for=""> Quantity<span id = "constraint">*</span></label><input type="number" class="form-control" id="quantity" name="quantity[]" placeholder="Enter Price"></div><div class="form-group col-xs-3"><label>Color <span id = "constraint">*</span></label><select class=" form-control" name="color_id[]">@foreach($colors as $color)<option value="{{$color->id}}">{!!$color->name!!}</option>@endforeach</select></div><div class="form-group col-xs-3"><label for="">Size <span id = "constraint">*</span></label><select name="size_id[]" id="size_id" class="form-control">@foreach($sizes as $size)<option value="{{$size->id}}">{{$size->name}}</option> @endforeach</select></div><div class="col-xs-3 form-group"><button class ="remove-form-detail" ><span class="glyphicon  glyphicon glyphicon-remove  "  style="color: #f90606; font-size: 20px;"></span></button></div></div>');

              });

             $(document).on('click','.remove-form-detail', function(e){
                e.preventDefault();
                $(this).parent().parent('div').remove();              

              });
              function format_number(number, prefix, thousand_separator, decimal_separator)
                {
                  var   thousand_separator = thousand_separator || ',',
                    decimal_separator = decimal_separator || '.',
                    regex   = new RegExp('[^' + decimal_separator + '\\d]', 'g'),
                    number_string = number.replace(regex, '').toString(),
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
                $("#price").keyup(function(e){
                    $(this).val(format_number($(this).val()));
                });

               $("#original_price").keyup(function(e){
                    $(this).val(format_number($(this).val()));
                });
         </script>
    @endsection

    	
  @endsection
