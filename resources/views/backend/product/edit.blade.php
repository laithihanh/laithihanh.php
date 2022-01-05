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
              <form action="{{route('admin.product.update',$pro->product_id)}}" method="POST" role="form" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <legend>Sửa sản phẩm</legend>
              
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="name" placeholder="Input field" name="name"onkeyup="getSlug()" value="{{$pro->name}}">
                </div>
                <div class="form-group">
                  <label for="">Danh mục sản phẩm</label>
                  <select name="cate_id" id="input" class="form-control" required="required" value="{{$pro->cate_id}}">
                    <option value="">----Chọn danh mục----</option>
                    @foreach($category as $value)
                    <option value="{{$value->cate_id}}"{{($value->cate_id ==$pro->cate_id)?'selected':''}}>{{$value->name}}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label>
                   <a class="btn btn-primary" data-toggle="modal" href='#modal-file'><i class="glyphicon glyphicon-file"></i></a>
                   <input type="text" name="images" id="images" style="display: none">
                </div>
                <div class="form-group">
                  <img src="{{url('uploads')}}/{{$pro->images}}" alt=""id="img" style="max-height: 200px">
                </div>
                <div class="form-group">
                  <label for="">Ảnh liên quan</label>
                   <a class="btn btn-primary" data-toggle="modal" href='#modal-file-list'><i class="glyphicon glyphicon-file"></i></a>
                   <input type="text" name="imagesList" id="imagesList" style="display: none">
                </div>
                
                <div class="form-group">
                  @foreach($img_pro as $vl)
                  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <div class="">
                      <img src="{{$vl->images}}" alt="">
                      
                    </div>
                  </div>
                  @endforeach
                </div>
                <div class="form-group">
                  <div class="row" id="show">
                    
                  </div>
                <div class="form-group">
                  <label for="">Mô tả sản phẩm</label>
                  <textarea  id="desc"name="description"  class="form-control" rows="3"> {{$pro->description}}</textarea>
                </div>
                <div class="form-group">
                  <label for="">Giá sản phẩm</label>
                  <input type="text" class="form-control" id="price" placeholder="Input field" name="price" value="{{$pro->price}}">
                  @if($errors->has('price'))
                    <div class="helper">
                      <span>{{$errors->first('price')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for="">Giá khuyến mãi</label>
                  <input type="text" class="form-control" id="sale_price" placeholder="Input field" name="sale_price" value="{{$pro->sale_price}}">
                  @if($errors->has('sale_price'))
                    <div class="helper">
                      <span>{{$errors->first('sale_price')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for="">Số lượng</label>
                  <input type="text" class="form-control" id="quantity" placeholder="Input field" name="quantity" value="{{$pro->quantity}}"
                  @if($errors->has('quantity'))
                    <div class="helper">
                      <span>{{$errors->first('quantity')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for="">Màu sắc</label>
                  <div class="checkbox">
                  @foreach($color as $data)
                    <label>
                      <input type="checkbox" value="{{$data->color_id}}" name="color[]"  
                      @if(in_array($data->color_id,$colorid)) checked  @endif >
                     <i class="glyphicon glyphicon-tree-deciduous" style="color:{{$data->name}}" 
                     ></i>
                    </label>
                   @endforeach
                  </div>
                </div>
                 <div class="form-group">
                  <label for="">Size</label>

                  <div class="checkbox">
                  @foreach($size as $data)
                    <label>
                      <input type="checkbox" value="{{$data->size_id}}" name="size[]" 
                        @if(in_array($data->size_id,$sizeid)) checked  @endif >
                            
                      {{$data->name}}
                    </label>
                  @endforeach
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Trạng thái</label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="status" id="inputStatus" value="1" {{($pro->status ==1)?'checked':""}}>
                        Còn hàng
                      </label>
                      <label>
                        <input type="radio" name="status" id="inputStatus" value="0" {{($pro->status ==0)?'checked':""}}>
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
