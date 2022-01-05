@extends('backend.main')
@section('content')
  <!-- =============================================== -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -- -->
          <form action="{{route('admin.user.update',$user->id)}}" method="POST" role="form">
            @method('PUT')
            @csrf
            <div class="row">
              <div class="col-md-6">
                  <legend>Sửa</legend>
                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập tên người dùng" name="name" value="{{$user->name}}">
                  @if($errors->has('name'))
                  <div class="helper" >
                    <span>{{$errors->first('name')}}</span>
                  </div>
                  @endif
                   </div>
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Nhập địa chỉ email" name="email" value="{{$user->email}}">
                    @if($errors->has('email'))
                      <div class="helper">
                        <span>{{$errors->first('email')}}</span>
                      </div>
                     @endif
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="password"  name="password" >
                    @if($errors->has('password'))
                      <div class="helper">
                        <span>{{$errors->first('password')}}</span>
                      </div>
                     @endif
                  </div>
                  <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" id="password"  name="confirm_password">
                    @if($errors->has('confirm_password'))
                      <div class="helper">
                        <span>{{$errors->first('confirm_password')}}</span>
                      </div>
                     @endif
                  </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                    <label for="">Roles</label>
                    @foreach($roles as $role)
                    <?php $checked = in_array( $role->name, $role_assigments)? 'checked' : '';?>
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"{{ $checked }} name="role[]"value="{{$role->id}}">
                        {{ $role->name }}
                      </label>
                    </div>
                    @endforeach()
                  </div> 
              </div>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</section>
<!-- /.content-wrapper -->
</div>
@stop()
