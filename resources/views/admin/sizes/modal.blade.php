
<div class="modal fade" id="modal-create-size">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Create Size</h4>
			</div>
			<div class="modal-body">
		        <form action="{{ route('sizes.store') }}" method="POST" role="form" enctype="multipart/form-data" id="form-create-size">
                {{ csrf_field() }}

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Size">
                  </div>
                

                   <div class="form-group">
                    <label for="">Country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="Enter Country">
                  </div>

                  <button type="submit" class="btn btn-primary btn-create-size">Create Size</button>
                </form>
			</div>
			
		</div>
	</div>
</div>


<div class="modal fade" id="modal-edit-size">
	<div class="modal-dialog ">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Update Size</h4>
			</div>
			<div class="modal-body">
		        <form action="#" method="post" role="form" id="form-update-size">
                {{ csrf_field() }}
                {{ method_field("put") }}

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name_edit" name="name" placeholder="Enter Size" >
                  </div>
                  

                  <div class="form-group">
                    <label for="">Country</label>
                    <input type="text" class="form-control" id="country_edit" name="country" placeholder="Enter Country" >
                  </div>

                  <button type="submit" class="btn btn-primary btn-update-size">Edit Size</button>
                </form>
			</div>
			
		</div>
	</div>
</div>