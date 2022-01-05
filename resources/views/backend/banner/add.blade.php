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
              <form action="{{route('admin.banner.store')}}" method="POST" role="form">
                @csrf
                <legend>Thêm mới banner</legend>
              
                <div class="form-group">
                  <label for="">Tên banner</label>
                  <input type="text" class="form-control" id="name" placeholder="Input field" name="name"onkeyup="getSlug()">
                </div>
                <div class="form-group">
                  <label for="">Ảnh baner</label>
                   <a class="btn btn-primary" data-toggle="modal" href='#modal-file'><i class="glyphicon glyphicon-file"></i></a>
                   <input type="text" name="images" id="images" style="display: none;">
                </div>
                <div class="form-group">
                  <img src="" alt=""id="img" style="max-height: 200px">
                </div>
                 <div class="form-group">
                  <label for="">Nội dung</label>
                  <textarea  id="desc"name="content"  class="form-control" rows="3" ></textarea>
                </div>
                <div class="form-group">
                  <label for="">Đường dẫn đẹp</label>
                  <input type="text" class="form-control" id="slug" placeholder="Input field" name="slug">
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
  </div>
  <!-- /.content-wrapper -->
@stop()

