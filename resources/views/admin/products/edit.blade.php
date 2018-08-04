
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
        <div class="col-xs-8">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{ asset('admin/posts') }}/{{$post->id}}" method="post" role="form">
                {{ csrf_field() }}
                {{ method_field("put") }}

                  <div class="form-group">
                    <label for="">Title <span id = "constraint">*</span></label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="{{$post->title}}">
                  </div>
                  <div class="form-group">
                    <label for="">Slug </label>
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Title" value="{{$post->slug}}">
                  </div>
                  <div class="form-group">
                    <label for="">Description <span id = "constraint">*</span></label>
                    <textarea id="description" class="form-control" name="description" placeholder="Enter Description" rows="7">{{$post->description}}</textarea>
                    <script type="text/javascript">
                      CKEDITOR.replace('description');
                    </script>
                  </div>
                   <div class="form-group">
                    <label for="">Content <span id = "constraint">*</span></label>
                    <textarea id="content" class="form-control" name="content" placeholder="Enter Content" rows="7">{{$post->content}}</textarea>
                    <script type="text/javascript">
                      CKEDITOR.replace('content');
                    </script>
                  </div>
                  {{-- <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" class="form-control" id="file" name="" >
                  </div> --}}
                  <div class="form-group">
                    <label>Tags</label>
                    <select class="select_tag form-control" name="tags[]" multiple="multiple">
                        @foreach($tags as $tag)
                          <option value="{{$tag->id}}" 
                            @foreach ($post->tags as $post_tag)
                              @if($tag->id == $post_tag->id)
                                @php
                                  echo "checked";
                                @endphp
                               @endif
                            @endforeach
                             

                            >{!!$tag->name!!}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="">Category</label>
                    <select name="category_id" id="category" class="form-control" required="required">
                      @foreach($categories as $category)
                        <option value="{{$category->id}}"
                         @if($category->id == $post->category_id)
                         	@php
                         		echo "checked";
                         	@endphp
                         @endif
                        	>{{$category->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group" style="display: none;">
                    <label for="">Auth</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter Title" value="{{Auth::id()}}">
                  </div>
                
                  
                
                  <button type="submit" class="btn btn-primary">Edit Post</button>
                </form>
            </div>
              
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-xs-4" style="background: #35424a; height: 100%;">
                <form action="{{ route('posts.uploadImg') }}" method="POST" enctype="multipart/form-data" class="dropzone" id="myImageDropZone">
                  @csrf
                  
                </form>
                 {{-- <form action="{{ route('posts.uploadImg') }}" enctype="multipart/form-data" method="POST">
                  @csrf
                    <input type="text" id ="firstname" name ="firstname" />
                    <input type="text" id ="lastname" name ="lastname" />
                    <div class="dropzone" id="myDropzone"></div>
                    <button type="submit" id="submit-all"> upload </button>
                </form> --}}
              </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
	{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> --}}
	<script type="text/javascript">
		var app_url = '{{ asset('') }}';
	</script>
   	
   @section('footer')
     <script type="text/javascript" src="{{ asset('js/posts.js') }}"></script>
     <script type="text/javascript">
       $(document).ready(function() {
          $('.select_tag').select2();
      });
        $( "#title" ).keyup(function() {
          title = $('#title').val();
          $.ajax({
                type: 'get',
                url: app_url+ 'admin/posts/slug/'+title,
                success: function(response){
                  console.log(response);
                    $('#slug').val(response);
                    
                }
            })
      });
     </script>
  @endsection

  	
@endsection
