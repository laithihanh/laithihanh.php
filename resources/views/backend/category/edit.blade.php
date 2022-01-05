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
              <form action="{{route('admin.category.update',$cate->cate_id)}}" method="POST" role="form" enctype="multipart/form-data">
                 @method('PUT')
                @csrf
                <legend>Sửa sản phẩm</legend>
              
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="name" placeholder="Input field" name="name"onkeyup="getSlug()" value="{{$cate->name}}">
                </div>
                <div class="form-group">
                  <label for="">Đường dẫn đẹp</label>
                  <input type="text" class="form-control" id="slug" placeholder="Input field" name="slug" value="{{$cate->slug}}">
                </div>
                  <div class="form-group">
                  <label for="">Mô tả sản phẩm</label>
                  <textarea  id="desc"name="description"  class="form-control" rows="3" >{{ $cate->description}}</textarea>
                </div>
                <div class="form-group">
                  <label for="">Trạng thái</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status" id="inputStatus" value="1" {{($cate->status ==1)?'checked':""}}>
                        Còn hàng
                      </label>
                      <label>
                        <input type="radio" name="status" id="inputStatus" value="0" {{($cate->status ==0)?'checked':""}}>
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
  <!-- /.content-wrapper -->
  </div>
@stop()
