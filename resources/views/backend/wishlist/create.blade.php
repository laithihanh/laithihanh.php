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
              <form action="{{route('admin.payment.store')}}" method="POST" role="form">
                @csrf
                <legend>Thêm mới </legend>
              
                <div class="form-group">
                  <label for="">Tên </label>
                  <input type="text" class="form-control" id="name" placeholder="Input field" name="name">
                @if($errors->has('name'))
                <div class="helper" >
                  <span>{{$errors->first('name')}}</span>
                </div>
                @endif
                </div>
                <div class="form-group">
                  <label for="">Nội dung </label>
                  <textarea  id="desc"name="content"  class="form-control" rows="3" ></textarea>
                @if($errors->has('content'))
                <div class="helper" >
                  <span>{{$errors->first('content')}}</span>
                </div>
                @endif
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
  </div>
  <!-- /.content-wrapper -->
@stop()

