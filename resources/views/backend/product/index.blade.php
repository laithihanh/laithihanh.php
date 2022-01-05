@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Danh sách sản phẩm</h3>
                </div>
                <div class="panel-body">
                  <form action="{{route('admin.getSearch')}}" method="get" class="form-inline" role="form">
                   
                     <div class="form-group">
                       <label class="sr-only" for="">label</label>
                       <input type="text" class="form-control"  name="key" id="" placeholder="Nhập tên danh mục...">
                     </div>
                     <button type="submit" class="btn btn-primary">Filter</button>
                     <a href="{{route('admin.product.create')}}" class="btn btn-success"> Add new</a>
                   </form>
                  <div class="col-md-12">
                    @if(Session::has('success'))
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>{{Session::get('success')}}</strong> 
                    </div>
                    @endif
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>Stt</th>
                              <th>Tên sản phẩm</th>
                              <th>Danh mục sản phẩm</th>
                              <th>Ảnh sản phẩm</th>
                              <th>Giá sản phẩm</th>
                              <th>Giá khuyến mãi</th>
                              <th>Số lượng</th>
                              <th>Trạng thái</th>
                              <th>Sửa </th>
                              <th>Xóa </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($product as $value)
                            <tr>
                              <td>{{$value->product_id}}</td>
                              <td>{{$value->name}}</td>
                              <td>{{$value->cate_id}}</td>
                              <td><img src="{{url('uploads')}}/{{$value->images}}" alt="" width="90px"></td>
                              <td>{{$value->price}}</td>
                              <td>{{$value->sale_price}}</td>
                              <td>{{$value->quantity}}</td>
                              <td>{!!($value->status ==1) ? '<span class="label label-success">Còn hàng</span>' : '<span class="label label-danger">Hết hàng</span>'!!}</td>
                              <td> <a href="{{route('admin.product.edit',$value->product_id)}}" class="btn btn-xs btn-success">Sửa</a></td>
                              <td>
                                <form action="{{route('admin.product.destroy',$value->product_id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
                                </form>
                              </td>
                              <td>
                                <a href="{{ route('admin.viewProduct',$value->product_id) }}" class="glyphicon glyphicon-eye-open js_order_item" style="color:black" ></a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="container" style="margin-left: 550px">
                        {!!$product->links()!!}
                      </div>
                  </div>
                </div>
              </div>
          </div>
  
        <!-- right col -->

      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop()
      
  