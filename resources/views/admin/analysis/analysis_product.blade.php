@extends('layouts.admin.master')


@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products Management
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products Management</a></li>
        <li class="active">List Products</li>
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
              <h3 class="box-title">Danh sách sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        		<form action="{{ route('analysis.search') }}" method="POST" class="form-inline" role="form">
              @csrf
              <div class="form-group">
                <label class="sr-only" for="">Day</label>
                <input type="date" class="form-control" name="day_month_year" id="" placeholder="Enter Day">
              </div>

              <div class="form-group">
                <label class="sr-only" for="">Month</label>
                <input type="month" class="form-control" id="" name="month_year" placeholder="Enter Month">
              </div>

              <div class="form-group">
                <label class="sr-only" for="">Year</label>
                <input type="number" class="form-control" name="year" placeholder="YYYY" min="2017" max="2100">
              </div>
            
              
            
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
              
              <!-- BAR CHART -->
              <div class="box box-success" style="margin-top: 20px;">
                <div class="box-header with-border">
                  <h3 class="box-title">Bar Chart</h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
                    <canvas id="myChart" width="100%" height="50px"></canvas>
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <div class="panel panel-info">
              <div class="panel-heading">
                <h3 class="panel-title">Thống kê  ~~  
                  @if(isset($search))
                      <span style="color: red;">{{$search}}</span>
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
                          <th>Tổng tiền  </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          @if(isset($number_products))
                          <td>{{number_format($number_products)}}</td>
                          <td>{{number_format($total)}}</td>
                          @endif
                        </tr>
                      </tbody>
                    </table>
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

    var ctx = document.getElementById("myChart");
    var ctx = document.getElementById("myChart").getContext("2d");
    var ctx = $("#myChart");
    var ctx = "myChart";
    var products_in_month = new Array(
      @php
         for ($i=1; $i <= 12 ; $i++) { 
      @endphp
           @php  echo " $products_in_month[$i], " @endphp
      @php
         }
      @endphp
      );
             

    var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [
        {
            label: '# Products In Month',
            data: products_in_month,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(225, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 246, 86, 0.2)',
                'rgba(75, 112, 192, 0.2)',
                'rgba(153, 101, 255, 0.2)',
                'rgba(150, 101, 255, 0.2)',
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)',
                
            ],
            borderWidth: 1
        }
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
 </script>


@endsection
