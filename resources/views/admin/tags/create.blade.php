@extends('layouts.admin.master')

@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm thẻ
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tags Management</a></li>
        <li class="active">Add Tag</li>
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
        <div class="col-xs-12">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ route('tags.store') }}" method="POST" role="form" enctype="multipart/form-data">
                {{ csrf_field() }}

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
                  </div>
                
                  <button type="submit" class="btn btn-primary">Create Tag</button>
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
