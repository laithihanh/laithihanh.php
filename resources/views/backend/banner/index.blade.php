 
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
            <div class="panel-heading">Danh sách banner</div>
            <div class="panel-body">
             
             <div class="col-md-8">
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
                              <th>Tên banner</th>
                              <th>Ảnh</th>
                              <th>Nội dung</th>
                              <th>Sửa</th>
                              <th>Xóa</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach($banner as $value)
                            <tr>
                              <td>{{$value->name}}</td>
                              <td><img src="{{url('uploads')}}/{{$value->images}}" alt="" width="90px"></td>
                              <td>{!! $value->content !!}</td>
                              <td> <a href="{{route('admin.banner.edit',$value->id)}}" class="btn btn-xs btn-success">Sửa</a></td>
                              <td>
                                <form action="{{route('admin.banner.destroy',$value->id)}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button class=" btn btn-xs btn-danger"onclick="return confirm('Bạn có chắc muốn xóa không')">Xóa</button>
                                </form>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="container" style="margin-left: 550px">
                          {!!$banner->links()!!}
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

