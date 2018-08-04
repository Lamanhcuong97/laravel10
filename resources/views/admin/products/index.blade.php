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
        		<a href="{{ route('products.create')}}" class="btn btn-success btn-add-post">Add Products <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></a>
              
              <table class="table table-bordered" id="products-table">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Original Price</th>
                        <th>Price</th>
                        <th>Photo</th>
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
                         
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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

@section('modal')
  @include('admin.products.modal')
@endsection
@endsection

@section('footer')
  
<script type="text/javascript">
    var app_url = '{{ asset('') }}';
  </script>
    {{-- @section('footer') --}}
 
   <script type="text/javascript" src="{{ asset('admin/dist/js/home.js') }}"></script>

   <script type="text/javascript">
      $( "#name_modal" ).keyup(function() {
          name = $('#name_modal').val();
          $.ajax({
                type: 'get',
                url: app_url+ 'admin/products/slug/'+name,
                success: function(response){
                    $('#slug_modal').val(response);
                    
                }
            })
      });
      $(document).on('click','#add-form-detail', function(e){
        e.preventDefault();
        $('.detail').append(' <div class="row row-detail"><div class="form-group col-xs-3"><label for=""> Quantity<span id = "constraint">*</span></label><input type="number" class="form-control" id="quantity" name="quantity[]" placeholder="Enter Price"></div><div class="form-group col-xs-3"><label>Color <span id = "constraint">*</span></label><select class=" form-control" name="color_id[]">@foreach($colors as $color)<option value="{{$color->id}}">{!!$color->name!!}</option>@endforeach</select></div><div class="form-group col-xs-3"><label for="">Size <span id = "constraint">*</span></label><select name="size_id[]" id="size_id" class="form-control">@foreach($sizes as $size)<option value="{{$size->id}}">{{$size->name}}</option> @endforeach</select></div><div class="col-xs-3 form-group"><button class ="remove-form-detail" ><span class="glyphicon  glyphicon glyphicon-remove  "  style="color: #f90606; font-size: 20px"></span></button></div></div>');

      });

      $(document).ready(function() {
              if (window.File && window.FileList && window.FileReader) {
                $("#images").on("change", function(e) {
                  var files = e.target.files,
                    filesLength = files.length;
                  for (var i = 0; i < filesLength; i++) {
                    var f = files[i]
                    var fileReader = new FileReader();
                    fileReader.onload = (function(e) {
                      var file = e.target;
                      $("<span class=\"pip\">" +
                        "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                     
                        "</span>").insertAfter("#images");
                      

                      
                    });
                    fileReader.readAsDataURL(f);
                  }
                });
              } else {
                alert("Your browser doesn't support to File API")
              }
            });

      
   </script>


@endsection
