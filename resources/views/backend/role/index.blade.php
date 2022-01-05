@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row"> 
            <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading">Danh sách nhóm quyền</div>
            <div class="panel-body">
             <form action="" method="get" class="form-inline" role="form">
               <a href="{{ route('admin.role.create') }}" class="btn btn-success"> Add new</a>
             </form>
             <div class="col-md-8" style="margin-top: 10px">
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
                              <th></th>
                            </tr>
                          </thead>
                           <tbody>
                              @foreach($data as $model)
                              <tr> 
                                <td>{{ $model->id }}</td>
                                <td>{{ $model->name }}</td>
                                <td>
                                 <a href="{{route('admin.role.edit',$model->id) }}" class="btn btn-xs btn-success">Sửa</a> 
                                </td>
                                <td>
                                  <form action="{{route('admin.role.destroy',$model->id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class=" btn btn-xs btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
                                </form>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                      </div>
                      <div class="container" style="margin-left: 550px">
                          {!!$data ->links()!!}
                      </div>
                  </div>
            </div>     
          </div>
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop()

