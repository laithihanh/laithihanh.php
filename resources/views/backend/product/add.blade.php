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
              <form action="{{route('admin.product.store')}}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <legend>Thêm mới sản phẩm</legend>
              
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="name" placeholder="Input field" name="name"onkeyup="getSlug()">
                </div>
                @if($errors->has('name'))
                <div class="helper" >
                  <span>{{$errors->first('name')}}</span>
                </div>
                @endif
                <div class="form-group">
                  <label for="">Đường dẫn đẹp</label>
                  <input type="text" class="form-control" id="slug" placeholder="Input field" name="slug">
                </div>
                <div class="form-group">
                  <label for="">Danh mục sản phẩm</label>
                  <select name="cate_id" id="input" class="form-control" >
                    <option value="">Danh sách danh mục</option>
                    @foreach($category as $value)
                    <option value="{{$value->cate_id}}" >{{$value->name}}</option>
                    @endforeach
                  </select>
                   @if($errors->has('cate_id'))
                    <div class="helper">
                      <span>{{$errors->first('cate_id')}}</span>
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label>
                   <a class="btn btn-primary" data-toggle="modal" href='#modal-file'><i class="glyphicon glyphicon-file"></i></a>
                   <input type="text" name="images" id="images" style="display: none">
                   @if($errors->has('images'))
                    <div class="helper">
                      <span>{{$errors->first('images')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <img src="" alt=""id="img" style="max-height: 200px">
                </div>
                <div class="form-group">
                  <label for="">Ảnh liên quan</label>
                   <a class="btn btn-primary" data-toggle="modal" href='#modal-file-list'><i class="glyphicon glyphicon-file"></i></a>
                   <input type="text" name="imagesList" id="imagesList" style="display: none">
                   @if($errors->has('imagesList'))
                    <div class="helper">
                      <span>{{$errors->first('imagesList')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <div class="row" id="show">
                    
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Giá sản phẩm</label>
                  <input type="text" class="form-control" id="price" placeholder="Input field" name="price">
                  @if($errors->has('price'))
                    <div class="helper">
                      <span>{{$errors->first('price')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for="">Giá khuyến mãi</label>
                  <input type="text" class="form-control" id="sale_price" placeholder="Input field" name="sale_price">
                  @if($errors->has('sale_price'))
                    <div class="helper">
                      <span>{{$errors->first('sale_price')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for="">Số lượng</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Input field" name="quantity">
                  @if($errors->has('quantity'))
                    <div class="helper">
                      <span>{{$errors->first('quantity')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for="">Mô tả sản phẩm</label>
                  <textarea  id="desc"name="description"  class="form-control" rows="3" ></textarea>
                  @if($errors->has('description'))
                    <div class="helper">
                      <span>{{$errors->first('description')}}</span>
                    </div>
                   @endif
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
                <div class="form-group">
                  <label for="">Màu sắc</label>
                  <div class="checkbox">
                  @foreach($color as $data)
                    <label>
                      <input type="checkbox" value="{{$data->color_id}}" name="color[]" >
                     <i class="glyphicon glyphicon-tree-deciduous" style="color:{{$data->name}}"></i>
                    </label>
                   @endforeach
                  </div>
                </div>
                 <div class="form-group">
                  <label for="">Size</label>
                  <div class="checkbox">
                  @foreach($size as $data)
                    <label>
                      <input type="checkbox" value="{{$data->size_id}}" name="size[]">
                      {{$data->name}}
                    </label>
                  @endforeach
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
      <div class="modal fade" id="modal-file-list">
      <div class="modal-dialog" style="width: 90%">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Modal title</h4>
          </div>
          <div class="modal-body">
            <iframe src="{{url('filemanager')}}/dialog.php?field_id=imagesList" width="100%" height="500px"></iframe>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop()
