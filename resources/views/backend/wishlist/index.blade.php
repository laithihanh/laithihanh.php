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
                  <h3 class="panel-title">Sản phẩm yêu thích</h3>
                </div>
                <div class="panel-body">
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
                              <th>Id</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Tên sản phẩm</th>
                              <th>Ảnh</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $k=1; ?>
                            @foreach($wishlist as $value)
                            <tr>
                              <td>{{$k}}</td>
                              <td>{{$value->cus->name}}</td>
                               <td>{{$value->cus->email}}</td>
                               <td>{{$value->product->name}}</td>
                               <td><img src="{{url('uploads')}}/{{$value->product->images}}" alt=""width="80px"></td>
                              <td>
                                <form action="{{route('admin.wishlist.destroy',$value->wishlist_id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
                                </form>
                              </td>
                            </tr>
                            <?php $k++ ?>
                            @endforeach

                          </tbody>
                        </table>
                      </div>
                      
                  </div>
                </div>
              </div>
              <div class="container" style="margin-left: 550px">
                  {!!$wishlist->links()!!}
              </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop()

  