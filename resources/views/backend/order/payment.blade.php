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
                  <h3 class="panel-title">Phương thức thanh toán</h3>
                </div>
                <div class="panel-body">
                  <form action="" method="get" class="form-inline" role="form">
                     <a href="{{route('admin.payment.create')}}" class="btn btn-success"> Add new</a>
                  </form>
                  <div class="col-md-12">
                    @if(Session::has('success'))
                    <div class="alert alert-success">
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
                              <th>Content</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $k=1; ?>
                            @foreach($payment as $value)
                            <tr>
                              <td>{{$k}}</td>
                              <td>{{ $value->name }}</td>
                              <td>{!! $value->content !!}</td>
                              <td> <a href="{{route('admin.payment.edit',$value->id)}}" class="btn btn-info">Sửa</a></td>
                              <td>
                              <td>
                                <form action="{{route('admin.payment.destroy',$value->id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop()
  