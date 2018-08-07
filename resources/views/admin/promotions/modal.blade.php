
<div class="modal fade" id="modal-create-category">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Create Category</h4>
			</div>
			<div class="modal-body">
		        <form action="{{ route('promotions.store') }}" method="POST" role="form" enctype="multipart/form-data" id="form-create-category">
                {{ csrf_field() }}

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea id="description" class="form-control" name="description" placeholder="Enter Description" rows="7"></textarea>
                    <script>
                      var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                      };
                    </script>
                    <script type="text/javascript">
                      description = CKEDITOR.replace('description', options);
                    </script>
                  </div>

                  <div class="form-group">
                    <label for="">Date Start Promo</label>
                    <input type="date" class="form-control" id="date_start" name="date_start" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label for="">Expiration Date</label>
                    <input type="date" class="form-control" id="expiration_date" name="expiration_date" placeholder="Enter Title">
                  </div>


                 
                
                  
                
                  <button type="submit" class="btn btn-primary btn-create-category">Create Category</button>
                </form>
			</div>
			
		</div>
	</div>
</div>


<div class="modal fade" id="modal-edit-category">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Category</h4>
			</div>
			<div class="modal-body">
		        <form action="{{ route('category.update',['id'=> $category->id]) }}" method="post" role="form" id="form-update-category">
                {{ csrf_field() }}m  
                {{ method_field("put") }}

                 <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" class="form-control" id="code" name="code" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea id="description" class="form-control" name="description" placeholder="Enter Description" rows="7"></textarea>
                    <script>
                      var options = {
                        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                      };
                    </script>
                    <script type="text/javascript">
                      description = CKEDITOR.replace('description', options);
                    </script>
                  </div>

                  <div class="form-group">
                    <label for="">Date Start Promo</label>
                    <input type="date" class="form-control" id="date_start" name="date_start" placeholder="Enter Title">
                  </div>

                  <div class="form-group">
                    <label for="">Expiration Date</label>
                    <input type="date" class="form-control" id="expiration_date" name="expiration_date" placeholder="Enter Title">
                  </div>


                  <button type="submit" class="btn btn-primary btn-update-category">Edit Category</button>
                </form>
			</div>
			
		</div>
	</div>
</div>