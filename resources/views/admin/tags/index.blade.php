@extends('layouts.admin.master')

@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tags Management
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tags Management</a></li>
        <li class="active">List Tag</li>
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
              <h3 class="box-title">Danh sách thẻ</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        		<a href="{{ route('tags.create')}}" class="btn btn-success btn-add-post">Add Tag <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 50px;">STT</th>
                  <th style="width: 400px;">Name</th>
                  <th>Slug</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                	@php
                		$i = 1;
                	@endphp
                @foreach($tags as $tag)
                	<tr id="tag_{{$tag->id}}">
	                  <td>{{$i++}}</td>
	                  <td>{{$tag->name}}</td>
	                  <td>{{$tag->slug}}</td>
	                  <td>{{$tag->created_at}}</td>
	                  
	                  <td>
                      <a href="{{ route('tags.edit', ['id'=>$tag->id]) }}" class="btn btn-warning btn-flat"><span class="  glyphicon glyphicon-edit" aria-hidden="true"></a>
                      <button class="btn btn-danger btn-del-tag" data-id ="{{$tag->id}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                      
	                  	
		                </form>
	                  </td>
	                </tr>

	                <div class="modal fade" id="show">
	                	<div class="modal-dialog">
	                		<div class="modal-content">
	                			<div class="modal-header">
	                				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                				<h4 class="modal-title">Show ID</h4>
	                			</div>
	                			<div class="modal-body">
	                				<h2 id=""></h2>
	                			</div>
	                			<div class="modal-footer">
	                				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	                				<button type="button" class="btn btn-primary">Save changes</button>
	                			</div>
	                		</div>
	                	</div>
	                </div>
                @endforeach
      
                </tbody>
                
              </table>
              
             {{--  <table class="table table-bordered" id="tags-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
            </div>

            <div class="modal fade" id="show">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Show ID</h4>
                        </div>
                        <div class="modal-body">
                          <h2 id=""></h2>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                      </div>
                    </div>
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
 
   <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
@endsection
