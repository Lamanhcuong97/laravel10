@extends('layouts.admin.master')

@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sửa bài viết
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Post Management</a></li>
        <li class="active">Edit Post</li>
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
                <form action="{{ route('tags.update', ['id'=> $tag->id]) }}" method="post" role="form">
                {{ csrf_field() }}
                {{ method_field("put") }}

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Title" value="{{$tag->name}}">
                  </div>
                  <div class="form-group">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Title" value="{{$tag->slug}}">
                  </div>
              
                  <button type="submit" class="btn btn-primary">Edit Tag</button>
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
   	
  <script type="text/javascript" src="{{ asset('js/posts.js') }}"></script>
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
