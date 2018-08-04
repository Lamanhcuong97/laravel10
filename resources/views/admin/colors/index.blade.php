@extends('layouts.admin.master')

@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Colors Management
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Colors Management</a></li>
        <li class="active">List Category</li>
      </ol>
    </section>
    	<script type="text/javascript">
    		@if(Session::has('success'))
    			toastr.success("{{ Session::get('success')}}")
    		@endif
    	</script>
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
            <div class="box-header">
              <h3 class="box-title">Danh sách màu</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        		<a href="{{ route('colors.create')}}" class="btn btn-success btn-add-color">Add Color <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
             <table class="table table-bordered" id="colors-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Color</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
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

    {{-- @endsection --}}
   {{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{ asset('js/toastr.min.js') }}"></script> --}}

  	
@endsection

@section('footer')
<script type="text/javascript">
    var app_url = '{{ asset('') }}';
  </script>
    {{-- @section('footer') --}}
 
   <script type="text/javascript" src="{{ asset('admin/dist/js/color.js') }}"></script>
@endsection


@section('modal')
  @include('admin.colors.modal')
@endsection
