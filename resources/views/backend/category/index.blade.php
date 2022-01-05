@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row"> <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading">Danh sách danh mục</div>
            <div class="panel-body">
             <form action="{{route('admin.getTk')}}" method="get" class="form-inline" role="form">
               <div class="form-group">
                 <label class="sr-only" for="">label</label>
                 <input type="text" class="form-control"  name="key" id="" placeholder="Nhập tên danh mục...">
               </div>
               <button type="submit" class="btn btn-primary">Filter</button>
               <a href="{{route('admin.category.create')}}" class="btn btn-success"> Add new</a>
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
                              <th>Tên danh mục</th>
                              <th>Mô tả</th>
                              <th>Trạng thái</th>
                              <th>Ngày tạo</th>
                              <th>Sửa</th>
                              <th>Xóa</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($category as $value)
                            <tr>
                              <td>{{$value->name}}</td>
                              <td>{!!$value->description!!}</td>
                              <td>{!!($value->status ==1) ? '<span class="label label-success">Còn hàng</span>' : '<span class="label label-danger">Hết hàng</span>'!!}</td>
                              <td>{{$value->created_at}}</td>
                              <td> <a href="{{route('admin.category.edit',$value->cate_id)}}" class="btn btn-xs btn-success">Sửa</a></td>
                              <td>
                                <form action="{{route('admin.category.destroy',$value->cate_id)}}" method="POST">
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
                      <div class="container" style="margin-left: 550px">
                          {!!$category->links()!!}
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
