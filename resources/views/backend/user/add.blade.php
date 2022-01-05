@extends('backend.main')
@section('content')
  <!-- =============================================== -->


   <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
              <form action="{{route('admin.user.store')}}" method="POST" role="form" >
                @csrf
                <legend>Thêm mới</legend>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Nhập tên admin" name="name"onkeyup="getSlug()">
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
                      <label for="">Trạng thái</label>
                        <div class="radio">
                          <label>
                            <input type="radio" name="status" id="inputStatus" value="1" checked="checked">
                            Admin
                          </label>
                          <label>
                            <input type="radio" name="status" id="inputStatus" value="0" >
                            User
                          </label>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                <div class="form-group">
                    <label for="">Roles</label>
                    @foreach($roles as $role)
                    <div class="checkbox">
                      <label>
                        <input type="checkbox" name="role[]"value="{{$role->id}}">
                        {{ $role->name }}
                      </label>
                    </div>
                    @endforeach()
                  </div> 
              </div>
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
