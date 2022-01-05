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
              <form action="{{route('admin.category.store')}}" method="POST" role="form">
                @csrf
                <legend>Thêm mới danh mục</legend>
              
                <div class="form-group">
                  <label for="">Tên danh mục</label>
                  <input type="text" class="form-control" id="name" placeholder="Input field" name="name"onkeyup="getSlug()">
                </div>
                 @if($errors->has('name'))
                <div class="helper" >
                  <span>{{$errors->first('name')}}</span>
                </div>
                @endif
                 <div class="form-group">
                  <label for="">Mô tả</label>
                 <textarea  id="desc"name="description"  class="form-control" rows="3" ></textarea>
                </div>
                 @if($errors->has('description'))
                <div class="helper" >
                  <span>{{$errors->first('description')}}</span>
                </div>
                @endif
                <div class="form-group">
                  <label for="">Đường dẫn đẹp</label>
                  <input type="text" class="form-control" id="slug" placeholder="Input field" name="slug">
                </div>
                <div class="form-group">
                  <label for="">Trạng thái</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status" id="inputStatus" value="1" checked="checked">
                        Còn hàng
                      </label>
                      <label>
                        <input type="radio" name="status" id="inputStatus" value="0" >
                        Hết hàng
                      </label>
                    </div>
                </div>
              
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
  
        <!-- right col -->

      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
    
  </div>
  </div>
  <!-- /.content-wrapper -->
@stop()

