@section('header')
   <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
@endsection
{{-- Modal Show Detail Product --}}

<div class="modal fade" id="modal-detail-product">
	<div class="modal-dialog modal-lg" style="bo">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Product Detail</h4>
			</div>
			<div class="modal-body" >
				<table class="table table-bordered" id="product_detail-table" style="width: 100%;">
	                <thead>
	                    <tr>
	                        <th>Code</th>
	                        <th>Name</th>
	                        <th>Color</th>
	                        <th>Size</th>
	                        <th>Quantity</th>
	                        <th>Action</th>
	                    </tr>
	                </thead>
	            </table>
	            <h4 style="margin-left: 20px">~~Thêm mới chi tiết~~</h4>
	            <form action="#" method="POST" class="form-inline" role="form" style="margin: 20px;" id="form-detail">
	            	@csrf
	            	<div class="form-group">
	                    <label for=""> Quantity<span id = "constraint">*</span></label>
	                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Price" required>
	                </div>

	                <div class="form-group">
	                  <label>Color <span id = "constraint">*</span></label>
	                  <select class=" form-control" name="color_id" id="color_id">
	                      @foreach($colors as $color)
	                        <option value="{{$color->id}}">{!!$color->name!!}</option>
	                      @endforeach
	                  </select>
	                </div>

	                <div class="form-group">
	                  <label for="">Size <span id = "constraint">*</span></label>
	                  <select name="size_id" id="size_id" class="form-control">
	                    @foreach($sizes as $size)
	                      <option value="{{$size->id}}">{{$size->name}}</option>
	                    @endforeach
	                  </select>
	                </div>
	                
	                <div class="form-group">
	                    <label for=""> Discount</label>
	                    <input type="number" class="form-control" id="discount" name="discount" placeholder="Enter Discount">
	                </div>
	            
	            	
	            
	            	<button  class="btn btn-primary btn-add-detail" data-id =''>Add</button>
	            </form>
			</div>
		</div>
	</div>
</div>

{{-- Modal show Product Detail --}}
<div class="modal fade" id="modal-edit-detail">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Detail Product</h4>
			</div>
			<div class="modal-body">
				<form action="" method="POST" role="form" id="form-update-detail">
					@csrf
				
					<div class="form-group">
	                    <label for=""> Quantity<span id = "constraint">*</span></label>
	                    <input type="number" class="form-control" id="quantity_detail" name="quantity" placeholder="Enter Price">
	                </div>

	                <div class="form-group">
	                  <label>Color <span id = "constraint">*</span></label>
	                  <select class=" form-control" name="color_id" id="color_id_detail">
	                      @foreach($colors as $color)
	                        <option value="{{$color->id}}" id="color_{{$color->id}}">{!!$color->name!!}</option>
	                      @endforeach
	                  </select>
	                </div>

	                <div class="form-group">
	                  <label for="">Size <span id = "constraint">*</span></label>
	                  <select name="size_id" id="size_id_detail" class="form-control">
	                    @foreach($sizes as $size)
	                      <option value="{{$size->id}}" id="size_{{$size->id}}">{{$size->name}}</option>
	                    @endforeach
	                  </select>
	                </div>
	                
	                <div class="form-group">
	                    <label for=""> Discount</label>
	                    <input type="number" class="form-control" id="discount_detail" name="discount" placeholder="Enter Discount">
	                </div>
	            
	            	
	            
	            	<button  class="btn btn-primary btn-update-detail" data-id =''>Update</button>
				</form>
			</div>
			
		</div>
	</div>
</div>


{{-- Modal show Update Product Detail --}}
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Detail Product</h4>
			</div>
			<div class="modal-body">
				<form action="" method="POST" role="form" id="form-update-detail">
					@csrf
				
					<div class="form-group">
	                    <label for=""> Quantity<span id = "constraint">*</span></label>
	                    <input type="number" class="form-control" id="quantity_detail" name="quantity" placeholder="Enter Price">
	                </div>

	                <div class="form-group">
	                  <label>Color <span id = "constraint">*</span></label>
	                  <select class=" form-control" name="color_id" id="color_id_detail">
	                      @foreach($colors as $color)
	                        <option value="{{$color->id}}" id="color_{{$color->id}}">{!!$color->name!!}</option>
	                      @endforeach
	                  </select>
	                </div>

	                <div class="form-group">
	                  <label for="">Size <span id = "constraint">*</span></label>
	                  <select name="size_id" id="size_id_detail" class="form-control">
	                    @foreach($sizes as $size)
	                      <option value="{{$size->id}}" id="size_{{$size->id}}>{{$size->name}}</option>
	                    @endforeach
	                  </select>
	                </div>
	                
	                <div class="form-group">
	                    <label for=""> Discount</label>
	                    <input type="number" class="form-control" id="discount_detail" name="discount" placeholder="Enter Discount">
	                </div>
	            
	            	
	            
	            	<button  class="btn btn-primary btn-update-detail" data-id =''>Update</button>
				</form>
			</div>
			
		</div>
	</div>
</div>

{{-- Modal show Product --}}


<div class="modal fade" id="modal-show-product">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Information Product</h4>
			</div>
			<div class="modal-body" >
				<div class="row">
                    <div class="col-md-6" id="image-product" >
                        
                    </div>
                    <div class="col-md-6" id="info-product">
                        <p id="name"></p>
                        <div class="container">
                            <i class="fa fa-star" style="color: #c5e60e"></i>
                            <i class="fa fa-star" style="color: #c5e60e"></i>
                            <i class="fa fa-star" style="color: #c5e60e"></i>
                            <i class="fa fa-star" style="color: #c5e60e"></i>
                            <i class="fa fa-star-half-alt" style="color: #c5e60e"></i>
                            <p style="float: left;">Thương hiệu: </p>
                            <b id="vendor" style="float: left; padding-bottom: 10px"></b>
                        </div>
                        <hr color="gray"; width="95%"; align="center" size="0.5px" style="margin-top: 3rem">
                        <span id="price" style="color: #ea0b0b; font-size: 38px">
                        	</span>
                        <span style="color: #ea0b0b; font-size: 35px">đ</span>
                        
                        <hr color="gray"; width="95%"; align="center" size="0.5px">
                        <p id="show-description">Mô tả: </p>
                        <span ></span> <br>
						<ul class="list-group list-inline " id="list-color"></ul>
						<ul class="list-group list-inline " id="list-size"></ul>
                        
                        <p id="show-quantity">Số lượng: </p>
                        
                    </div>       
                
                </div>
                
                </div>
			</div>
			
		</div>
	</div>
</div>


{{--Modal Create Product  --}}

<div class="modal fade" id="modal-create-product">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Create Product</h4>
			</div>
			<div class="modal-body">
					 <section class="content">
				      <div class="row">
				        <div class="col-xs-12">

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
				                <div class="col-xs-12"> <button id="add-form-detail" ><span class="glyphicon   glyphicon glyphicon-plus "  style="color: #7988f7; font-size: 14px"></span>Add Detail</button></div>
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
				                <div class="field" align="left">
					                <h3>Upload your images</h3>
					                <input type="file" id="images" name="images[]" multiple />
					              </div>
					             

					                <div class="form-group">
					                  <label for="">Category</label>
					                  <select name="category_id" id="category" class="form-control" required="required">
					                    @foreach($categories as $category)
					                      <option value="{{$category->id}}">{{$category->name}}</option>
					                    @endforeach
					                  </select>
					                </div>
				                
				                <button type="submit" class="btn btn-primary btn-create-product btn-mdb-color btn-rounded nextBtn-2 float-right">Create Product</button>


				          

			        
			                
			            </form>
		       		  </div>
			            <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>
			        <!-- /.col -->
			      </div>
			      <!-- /.row -->
			    </section>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-edit-product">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Product</h4>
			</div>
			<div class="modal-body">
				<form action="" method="PUT" role="form" id="form-update-product">
					@csrf
					<input type="hidden" value="" id="update_product_id">
		                <div class="form-group">
		                  	<label for="">Name <span id = "constraint">*</span></label>
                  			<input type="text" class="form-control" id="name_modal" name="name" placeholder="Enter Name Product" value="{{old('name')}}">
		                  
		                </div>

		                <div class="row form-group">
		                  <div class="col-xs-6">
		                    <label for="">Code <span id = "constraint">*</span></label>
		                    <input type="text" class="form-control" id="product_code_modal" name="product_code" placeholder="Enter Product Code" value="{{old('product_code')}}">
		                  </div>
		                  <div class="col-xs-6">
		                    <label for="">Slug </label>
		                    <input type="text" class="form-control" id="slug_modal" name="slug" placeholder="Enter Title" value="{{old('slug')}}">
		                  </div>
		                </div>
		              
		                <div class="row form-group">
		                  <div class="col-xs-6">
		                    <label for="">Orginal Price (Đơn vị: nghìn đồng)<span id = "constraint">*</span> </label>
		                    <input type="text" class="form-control" id="original_price_modal" name="original_price" placeholder="Enter Original Price" value="{{old('original_price')}}">
		                  </div>
		                  <div class="col-xs-6">
		                    <label for=""> Price (Đơn vị: nghìn đồng)<span id = "constraint">*</span></label>
		                    <input type="text" class="form-control" id="price_modal" name="price" placeholder="Enter Price" value="{{old('price')}}">
		                  </div>
		                </div>
		               


		                <div class="form-group">
		                  <label for="">Description <span id = "constraint">*</span></label>
		                  <textarea id="description_modal" class="form-control" name="description" placeholder="Enter Description" rows="4" >{{old('description')}}</textarea>
		                  
		                </div>

		                 <div class="form-group">
		                  <label for="">Content <span id = "constraint">*</span></label>
		                  <textarea id="content_modal" class="form-control" name="content" placeholder="Enter Content" rows="5">{{old('content')}}</textarea>
		                  
		                </div>

		                 <div class="form-group">
		                  <label for="">Category</label>
		                  <select name="category_id" id="category_modal" class="form-control" required="required">
		                    @foreach($categories as $category)
		                      <option value="{{$category->id}}" id="category_{{$category->id}}">{{$category->name}}</option>
		                    @endforeach
		                  </select>
		                </div>
		                 <div class="form-group">
		                  <label for="">Vendor</label>
		                  <select name="vendor_id" id="vendor_modal" class="form-control" required="required">
		                    @foreach($vendors as $vendor)
		                      <option value="{{$vendor->id}}" id="vendor_{{$vendor->id}}">{{$vendor->name}}</option>
		                    @endforeach
		                  </select>
		                </div>
						            	
	            
	            	<button  class="btn btn-primary btn-update-product" data-id =''>Update</button>
				</form>
			</div>
			
		</div>
	</div>
</div>

<div class="modal fade" id="modal-images">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" >IMAGES PRODUCT</h4>
			</div>
			<div class="modal-body">
			 	<form class="form-inline images-preview" action="" method="PUT" role="form" id="form-upload-images" enctype="multipart/form-data">
			 		@csrf
			 		<div class="form-group">
					    <label>Color <span id = "constraint">*</span></label>  
                        <select class=" form-control" name="color_id" id="color_id">
                            @foreach($colors as $color)
                                <option value="{{$color->id}}">{!!$color->name!!}</option>
                            @endforeach
                        </select>
					</div>
					<div class="form-group">
					   	<div class="field" align="left">
			                <input type="file" id="images_modal" name="images[]" multiple />
			            </div>
					</div>
				 
				  <button type="submit" class="btn btn-primary btn-upload" data-id=""> Upload</button>
				</form>
              	<div class="images"></div>

			</div>
		</div>
	</div>
</div>

