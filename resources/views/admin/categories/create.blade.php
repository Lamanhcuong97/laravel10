@extends('layouts.admin.master')

@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm danh mục
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category Management</a></li>
        <li class="active">Add Category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <script type="text/javascript">
              @if ($errors->any())
                  @foreach ($errors->all() as $error)
                     toastr.error("{{$error}}");
                  @endforeach
              @endif
          </script>
          

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('category.store') }}" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Title">
                  </div>
                  <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Title">
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
                      CKEDITOR.replace('description', options);
                    </script>
                  </div>

                  <div class="form-group">
                    <label for="">Category</label>
                    <select name="parent_id" id="category" class="form-control" required="required">
                      <option value="0">Category Parent</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                
                  
                
                  <button type="submit" class="btn btn-primary">Create Category</button>
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
    <!-- /.content -->
	{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
	<script type="text/javascript">
		var app_url = '{{ asset('') }}';
	</script>
   	
  @section('footer')
      <script type="text/javascript">
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
      </script>
  @endsection
  	
@endsection
