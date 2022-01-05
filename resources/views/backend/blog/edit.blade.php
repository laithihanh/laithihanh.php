@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">
              <form action="{{route('admin.blog.update',$blog->blog_id)}}" method="POST" role="form" enctype="multipart/form-data">
                 @method('PUT')
                @csrf
                <legend>Sửa sản phẩm</legend>
              
                <div class="form-group">
                  <label for="">Tiêu đề</label>
                  <input type="text" class="form-control" id="title" placeholder="Input field" name="title"onkeyup="getSlug()" value="{{$blog->title}}">
                </div>
                
                <div class="form-group">
                  <label for="">Ảnh </label>
                   <a class="btn btn-primary" data-toggle="modal" href='#modal-file'><i class="glyphicon glyphicon-file"></i></a>
                   <input type="text" name="images" id="images">
                </div>
                <div class="form-group">
                  <img src="{{url('uploads')}}/{{$blog->images}}" alt=""id="img" style="max-height: 200px">
                </div>
                
                
                <div class="form-group">
                  <div class="row" id="show">
                    
                  </div>
                <div class="form-group">
                  <label for="">Nội dung</label>
                  <textarea  id="desc"name="content"  class="form-control" rows="3" >{{ $blog->content }}</textarea>
                </div>

                
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
  
        <!-- right col -->

      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  
    <div class="modal fade" id="modal-file">
      <div class="modal-dialog" style="width: 90%">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <iframe src="{{url('filemanager')}}/dialog.php?field_id=images" width="100%" height="500px"></iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  </div>
@stop()
