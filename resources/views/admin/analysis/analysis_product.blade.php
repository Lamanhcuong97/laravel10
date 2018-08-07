@extends('layouts.admin.master')


@section('content')
        
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Analysis Best Seller
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Analysis</a></li>
        <li class="active">List Products Best Seller</li>
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
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="{{ route('analysis.product_best_seller') }}" method="POST" class="form-inline" role="form">
              @csrf
              

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
              <h3 class="box-title" style="color: #2d82b7;">Danh sách sản phẩm bán chạy ~~  {{$search}}  ~~</h3>
        		  <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <tr>
                        <th>STT</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Photo</th>
                    </tr>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $i = 1;
                    @endphp
                    @if (isset($products_best_seller))
                      @foreach($products_best_seller as $product)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$product->name}}</td>
                          <td>{{$product->quantity}}</td>
                          <td><img src="{{ asset($gallery[$product->id]->link) }}" style="height: 70px; "></td>
                        </tr>
                      @endforeach
                    @endif
                  </tbody>
                </table>
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
