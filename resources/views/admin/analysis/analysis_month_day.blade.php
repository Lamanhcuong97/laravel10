@extends('layouts.admin.master')


@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Analysis 
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Analysis </a></li>
        <li class="active">Analysis Day Or Month</li>
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
              <h3 class="box-title">Thông kê theo ngày , tháng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        		<form action="{{ route('analysis.searchDayOrMonth') }}" method="POST" class="form-inline" role="form">
              @csrf
              <div class="form-group">
                <label class="sr-only" for="">Day</label>
                <input type="date" class="form-control" name="day_month_year" id="" placeholder="Enter Day">
              </div>

              <div class="form-group">
                <label class="sr-only" for="">Month</label>
                <input type="month" class="form-control" id="" name="month_year" placeholder="Enter Month">
              </div>
              
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
              
            
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Thống kê  ~~  
                  @if(isset($search))
                      <span style="color: red;" id="year">{{$search}}</span>
                  @endif
                  ~~
                </h3>
              </div>
              <div class="panel-body">
                  <div class="row">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Số sản phẩm bán </th>
                          <th>Tổng doanh thu </th>
                          <th>Tổng tiền lãi </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @if(isset($total))
                          <td>{{number_format($number_products)}}</td>
                          <td>{{number_format($total)}}</td>
                          <td>{{number_format($interest)}}</td>
                          @endif
                        </tr>
                      </tbody>
                    </table>

                  </div>
                  <div class="row">
                    <div class="col-xs-10"></div>
                    <div class="col-xs-2">
                      @if(isset($number_product_year))
                      <form action="{{ route('analysis.pdf') }}" method="POST" class="form-inline" role="form">
                        @csrf
                        <div class="form-group" style="display: none;">
                          <label class="sr-only" for="">Year</label>
                          <input type="text" class="form-control" id="" name="year" value="{{$search}}" placeholder="Input field">
                        </div>
                      
                        
                      
                        <button class="btn btn-primary btn-report" style="align-self: right;">In báo cáo</button>
                      </form>
                      @endif
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
	
@section('modal')
  
@endsection
@endsection

@section('footer')
  
<script type="text/javascript">
    var app_url = '{{ asset('') }}';
  </script>
    {{-- @section('footer') --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
 <script type="text/javascript">
    

    
 </script>


@endsection
