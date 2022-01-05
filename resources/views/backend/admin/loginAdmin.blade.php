<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{url('public')}}/backend/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('public')}}/backend/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{url('public')}}/backend/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('public')}}/backend/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('public')}}/backend/plugins/iCheck/square/blue.css">

  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>Đăng nhập admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  <?php 
  $message=Session::get('message');
  if($message){
    echo '<span class="text-alert"style="color: red;font-size: 17px;width: 100%;text-align:center;
  font-weight: bold;">'.$message.'</span>';
    Session::put('message',null);
  }
   ?>

    <form action="{{route('postdangnhap')}}" method="POST">
     @csrf
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email"name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if($errors->has('email'))
        <div class="helper" style="color: red">
          <span>{{$errors->first('email')}}</span>
        </div>
        @endif
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password"name="password" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if($errors->has('password'))
        <div class="helper"style="color: red" >
          <span>{{$errors->first('password')}}</span>
        </div>
        @endif
      </div>
      <div class="row">
        <div class="col-md-6" style="margin-left: 90px">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
</body>

</html>
