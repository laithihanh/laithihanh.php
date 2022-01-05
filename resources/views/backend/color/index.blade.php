@extends('backend.main')
@section('content')


<div class="content-wrapper">
  
  <section class="content">
    <div class="row">
      @if(Session::has('success'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong>{{Session::get('success')}}</strong>
      </div>
      @endif

      <div class="col-md-8">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">Danh sách màu sắc </h3>
          </div>
          <div class="panel-body">
            <form action="" method="POST" class="form-inline" role="form">
              @csrf
               <a href="{{route('admin.color.create')}}" class="btn btn-success"> Add new</a>
             </form>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Giá trị</th>
                    <th>Tên</th>
                    <th>Sửa</th>
                    <th>Xóa </th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($color as $value)
                  <tr>
                    <td>{{ $value->nameColor }}</td>
                    <td>{{$value->name}}</td>
                    <td><a href="{{route('admin.color.edit',$value->color_id)}}" class="btn btn-xs btn-success">Sửa</a></td>
                    <td>               
                      <form action="{{route('admin.color.destroy',$value->color_id)}}" method="POST">
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
  </section>
</div>
@stop()