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
                  <h3 class="panel-title">Danh sách user</h3>
                </div>
                <div class="panel-body">
                  <form action="" method="get" class="form-inline" role="form">
                   
                     <div class="form-group">
                       <label class="sr-only" for="">label</label>
                       <input type="text" class="form-control"  name="key" id="" placeholder="Nhập tên danh mục...">
                     </div>
                     <button type="submit" class="btn btn-primary">Filter</button>
                     <a href="{{route('admin.customer.create')}}" class="btn btn-success"> Add new</a>
                   </form>
                  <div class="col-md-8">
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
                               <th>Phone</th>
                                <th>Address</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($user as $value)
                            <tr>
                              <td>{{$value->id}}</td>
                              <td>{{$value->name}}</td>
                               <td>{{$value->email}}</td>
                               <td>{{$value->phone}}</td>
                               <td>{{$value->address}}</td>
                               
                              <td>
                                <form action="{{route('admin.customer.destroy',$value->id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class="btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
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

</script>
  