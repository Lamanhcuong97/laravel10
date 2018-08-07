@extends('layouts.admin.master')

@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Management Promotions
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Managements Promotions</a></li>
        <li class="active">List Promotions</li>
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
              <h3 class="box-title">Danh sách khuyến mãi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        		<a href="{{ route('promotions.create')}}" class="btn btn-success btn-add-promo">Add Promotions <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Slider</th>
                    <th>Created Ats</th>
                  </tr>
                </thead>
                <tbody>
                 {{--  @php
                    $i = 1;
                  @endphp
                 @foreach($sliders as $slider)
                     <tr>
                        <td>{{$i++}}</td>
                        <td><img src="{{ asset($slider->link) }}" style="height: 120px;"></td>
                        <td>{{$slider->created_at}}</td>
                      </tr>
                 @endforeach --}}
                </tbody>
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
 
   <script type="text/javascript" src="{{ asset('admin/dist/js/promo.js') }}"></script>
@endsection


@section('modal')
  @include('admin.promotions.modal')
@endsection
