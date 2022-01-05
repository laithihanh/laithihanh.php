@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-6">
              <form action="{{route('admin.customer.store')}}" method="POST" role="form" >
                @csrf
                <legend>Thêm mới</legend>
              
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Nhập tên người dùng" name="name"onkeyup="getSlug()">
                @if($errors->has('name'))
                <div class="helper" >
                  <span>{{$errors->first('name')}}</span>
                </div>
                @endif
                 </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" id="email" placeholder="Nhập địa chỉ email" name="email">
                  @if($errors->has('email'))
                    <div class="helper">
                      <span>{{$errors->first('email')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Nhập mật khẩu" name="password">
                  @if($errors->has('password'))
                    <div class="helper">
                      <span>{{$errors->first('password')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for=""> Nhập lại Password</label>
                  <input type="password" class="form-control" id="passwordAgain" placeholder="Nhập lại mật khẩu" name="passwordAgain">
                  @if($errors->has('passwordAgain'))
                    <div class="helper">
                      <span>{{$errors->first('passwordAgain')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for="">Phone</label>
                  <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại" name="phone">
                  @if($errors->has('phone'))
                    <div class="helper">
                      <span>{{$errors->first('phone')}}</span>
                    </div>
                   @endif
                </div>
                <div class="form-group">
                  <label for="">Address</label>
                  <input type="text" class="form-control" id="address" placeholder="Nhập số địa chỉ" name="address">
                  @if($errors->has('address'))
                    <div class="helper">
                      <span>{{$errors->first('address')}}</span>
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
  <!-- /.content-wrapper -->
  </div>
@stop()
