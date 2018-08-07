
<div class="modal fade" id="modal-create-slider">
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

<div class="modal fade" id="modal-edit-color">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Color</h4>
			</div>
			<div class="modal-body">
		        <form action="#" method="post" role="form" id="form-update-color">
                {{ csrf_field() }}
                {{ method_field("put") }}

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name_edit" name="name" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="">Color</label>
                    <input type="color" class="form-control" id="color_edit" name="code_color" placeholder="Enter Title">
                  </div>
                  <button type="submit" class="btn btn-primary btn-update-color">Edit Color</button>
                </form>
			</div>
			
		</div>
	</div>
</div>