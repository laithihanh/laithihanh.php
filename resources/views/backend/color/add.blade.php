
@extends('backend.main')
@section('content')


<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-6">
        <form action="{{route('admin.color.store')}}" method="POST" role="form">
          @csrf
          <legend>Thêm mới thuộc tính</legend>
          
          <div class="form-group value1">
            <label for="">Giá trị</label>
            <input type="tex" class="form-control" name="nameColor" placeholder="Input field">
          </div>
          <div class="form-group value1">
            <label for="">Tên</label>
            <input type="color" class="form-control" id="v1"name="name" placeholder="Input field">
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




  