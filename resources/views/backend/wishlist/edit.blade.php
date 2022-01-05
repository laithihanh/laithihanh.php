@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">
              <form action="{{route('admin.payment.update',$payment->id)}}" method="POST" role="form" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <legend>Sửa </legend>
              
                <div class="form-group">
                  <label for="">Tên</label>
                  <input type="text" class="form-control" id="name" placeholder="Input field" name="name" value="{{$payment->name}}">
                </div>
                <div class="form-group">
                  <label for="">Nội dung</label>
                  <input type="text" class="form-control" id="content" placeholder="Input field" name="content" value="{{$payment->content}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
  
        <!-- right col -->

      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

@stop()
