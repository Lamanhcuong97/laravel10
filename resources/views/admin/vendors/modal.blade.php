
<div class="modal fade" id="modal-create-vendor">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Create Vendor</h4>
			</div>
			<div class="modal-body">
		        <form action="#" method="POST" role="form" enctype="multipart/form-data" id="form-create-vendor">
                {{ csrf_field() }}

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                  </div>

                  <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                  </div>

                  <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone Number">
                  </div>

                  <div class="form-group">
                    <label for="">Fax</label>
                    <input type="text" class="form-control" id="fax" name="fax" placeholder="Enter Fax">
                  </div>

                   <div class="form-group">
                   	<label for="">Thumnail</label>
				    	<div class="field" align="left">
			                <input type="file" id="thumbnail" name="thumnail"  />
			             </div>
			             <div class="images-preview"></div>
				  </div>

                  <button type="submit" class="btn btn-primary btn-create-vendor">Create Vendor</button>
                </form>
			</div>
			
		</div>
	</div>
</div>


<div class="modal fade" id="modal-edit-vendor">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Size</h4>
			</div>
			<div class="modal-body">
		        <form action="#" method="post" role="form" id="form-update-vendor" enctype = 'multipart/form-data'>
                {{ csrf_field() }}
                {{ method_field("put") }}

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name_edit" name="name" placeholder="Enter Size">
                  </div>

                  <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control" id="address_edit" name="address" placeholder="Enter Size">
                  </div>

                  <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number_edit" name="phone_number" placeholder="Enter Size">
                  </div>

                  <div class="form-group">
                    <label for="">Fax</label>
                    <input type="text" class="form-control" id="fax_edit" name="fax" placeholder="Enter Size">
                  </div>

                   <div class="form-group">
                   	<label for="">Thumnail</label>
				    	<div class="field" align="left">
			                <input type="file" id="thumbnail_edit" name="thumbnail"  />
			             </div>
			             <div class="images-preview-edit"></div>
				  </div>

                  <button type="submit" class="btn btn-primary btn-update-vendor">Edit Vendor</button>
                </form>
			</div>
			
		</div>
	</div>
</div>