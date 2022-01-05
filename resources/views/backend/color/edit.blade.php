
@extends('backend.main')
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <form action="{{route('admin.color.update',$col->color_id)}}" method="POST" role="form">
          @method('PUT')
          @csrf
          <legend>Sửa thuộc tính</legend>
              <div class="form-group value2"  >
                <label for="">Giá trị</label>
                <input type="text" class="form-control"  placeholder="" name="nameColor" value="{{$col->nameColor}}">
              </div> 
              <div class="form-group value2"  >
                <label for="">Tên</label>
                <input type="color" class="form-control"  placeholder="" name="name" value="{{$col->name}}">
              </div>
      
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
      <!-- Small boxes (Stat box) -->

      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <script src="//code.jquery.com/jquery.js"></script>


@stop()


