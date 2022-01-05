@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')


<div class="container-fluid khoangcach" style="margin-top: -20px" >
	<div class="row">
        <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg');width: 100%">
            <div class="container">
                <h1 class="text-light chu">LOGIN</h1>
                <div class="sep-sm bg-light"></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-light">
                        <li  class="glyphicon glyphicon-home"><a href="{{route('home')}}" style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="" style="text-decoration: none;">Login</a></li>
                    </ol>
                </nav>
            </div>
        </div>
	</div>	
</div>
<section class="login-block" style="margin-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 login-sec">
				<a href="{{route('register')}}" style="text-decoration: none;color: black;text-align: center;"><b class="kk">Register</b></a>

				<a href="{{route('getlogin')}}" style="text-decoration: none;color: red;float: right;text-align: left;"><b> Login</b></a><br><br>
				<?php 
				  $message=Session::get('message');
				  if($message){
				    echo '<span class="text-alert"style="color: red;font-size: 17px;width: 100%;text-align:center;
				  font-weight: bold;">'.$message.'</span>';
				    Session::put('message',null);
				  }
				?>
				 @if(Session::has('thongbao'))
                    <div class="alert alert-danger">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>{{Session::get('thongbao')}}</strong> 
                    </div>
                    @endif
				<form action="{{route('postlogin')}}" method="POST">
				  @csrf
				  @if(Session::has('success'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>{{Session::get('success')}}</strong> 
                    </div>
                    @endif
					<div class="form-group">
						<label for="exampleInputEmail1" class="text-uppercase">Email</label>
						<input type="text" class="form-control" placeholder="" name="email">
					@if($errors->has('email'))
	                <div class="helper">
	                  	<span>{{$errors->first('email')}}</span>
	                </div>
	                @endif
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="text-uppercase">Password</label>
						<input type="password" class="form-control"  placeholder="" name="password">
					@if($errors->has('password'))
	                <div class="helper" >
	                  	<span>{{$errors->first('password')}}</span>
	                </div>
	                @endif
					</div>
					<div class="form-check">
						<label class="form-check-label">
							<input type="checkbox" name="remember"class="form-check-input" value="1">
							Remember 
						</label>
						<br>
						<button type="submit" style="width: 100%;background: black;color: #fff;" class="btn btn-login float-right">Login</button>
						<a href="{{route('quenmk')}}" style="text-decoration: none;color: red">Lost your password???</a>
					</div>
				</form>
			</div>
		</div>
	</div>       
</section>
@stop()
