@extends('backend.main')
@section('content')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-dark">Trang chủ quản trị</h2>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$category_acount}}</h3>

                <p>Category</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('admin.category.store')}}" class="small-box-footer">More info <i class=" glyphicon glyphicon-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$product_acount}}</h3>

                <p>Products</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('admin.product.store')}}" class="small-box-footer">More info <i class="  glyphicon glyphicon-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$cus_acount}}</h3>

                <p>Customer</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{route('admin.customer.store')}}" class="small-box-footer">More info <i class=" glyphicon glyphicon-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$order_acount}}</h3>

                <p>Order</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{route('admin.order.store')}}" class="small-box-footer">More info <i class="glyphicon glyphicon-arrow-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div>
      <!-- /.container-fluid -->
      <div class="panel panel-default" style="">
        <!-- Default panel contents -->
        <div class="panel-heading">New Order</div>
        <table class="table">
          <thead>
            <tr>
              <th>Stt</th>
              <th>Name</th>
              <th>Email</th>
              <th>Created_at</th>
            </tr>
          </thead>
          <tbody>
            <?php $k=1; ?>
            @foreach($order as $value)
            <tr>
              <td>{{$k}}</td>
              <td>{{$value->cus->name}}</td>
              <td>{{$value->cus->email}}</td>
              <td>{{$value->created_at}}</td>
            </tr>
            <?php $k++ ?>
            @endforeach
          </tbody>
        </table>
      </div>
    </section>

    
  </div>
  <!-- /.content-wrapper -->
@stop()
 
  