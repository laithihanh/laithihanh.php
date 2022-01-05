@extends('backend.main')
@section('content')               
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">Chi tiết sản phẩm</h3>
                </div>
                <div class="col-md-6">
                  <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Tên sản phẩm</th>
                      <th>Ảnh đại diện</th>
                      <th>Giá sản phẩm</th>
                      <th>Giá khuyến mãi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($sanpham as $value)
                      <tr>
                        <td>{{ $value->name }}</td>
                        <td><img src="{{url('uploads')}}/{{ $value->images }}" alt="" style="width: 200px"></td>
                        <td>{{ $value->price }}k</td>
                        <td>{{ $value->sale_price }}k</td>
                      </tr>
                    @endforeach()
                  </tbody>
                </table>
                </div>
                <div class="col-md-2">
                  <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Ảnh chi tiết </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($product->getImages as $image)
                      <tr>
                      <td><img src="{{url('uploads')}}/{{$image->images}}" style="height: 100px;width: 100px" alt=""></td>  
                    </tr>
                    @endforeach()
                  </tbody>
                </table>
                </div>
                <div class="col-md-2">
                  <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Màu sắc</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach ($nam_color as $color)
                    <tr>
                      <td>{{$color->nameColor}}</td>
                    </tr>
                    @endforeach()
                  </tbody>
                </table>
                </div>
                <div class="col-md-2">
                  <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Kích thước</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($nam_size as $size)
                      <tr>
                      <td>{{$size->name}}</td>
                    </tr>
                    @endforeach()
                  </tbody>
                </table>
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
                