@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')


<div class="container-fluid khoangcach" style="margin-top: -20px">
	<div class="row">
        <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg')">
            <div class="container">
                <h1 class="text-light chu">REGISTER</h1>
                <div class="sep-sm bg-light"></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-light">
                        <li  class="glyphicon glyphicon-home"><a href="{{route('home')}}" style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('register')}}" style="text-decoration: none;">Register</a></li>
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
				<a href="{{route('register')}}" style="text-decoration: none;color: red;text-align: center;"><b class="kk">Register</b></a>
				<a href="{{route('getlogin')}}" style="text-decoration: none;color: black;float: right;text-align: left;"><b class="kk">Login</b></a><br><br>
				<form action="{{route('postdang_ky')}}" method="POST">
				  @csrf
					<div class="col-sm-3"></div>
					@if(Session::has('thành công'))
						<div class="alert alert-success">{{Session::get('thành công')}}</div>
					@endif
					<div class="form-group">
						<label for="exampleInputEmail1" class="text-uppercase">User name or email</label>
						<input type="text" class="form-control" placeholder=""name="name">
					</div>
					@if($errors->has('name'))
	                <div class="helper" >
	                  <span>{{$errors->first('name')}}</span>
	                </div>
	                @endif
					<div class="form-group">
						<label for="exampleInputEmail1" class="text-uppercase"> Email address</label>
						<input type="text" class="form-control" placeholder=""name="email">
					</div>
					@if($errors->has('email'))
	                <div class="helper" >
	                  <span>{{$errors->first('email')}}</span>
	                </div>
	                @endif
					<div class="form-group">
						<label for="exampleInputPassword1" class="text-uppercase">Password</label>
						<input type="password" class="form-control" placeholder=""name="password">
					</div>
					@if($errors->has('password'))
	                <div class="helper" >
	                  <span>{{$errors->first('password')}}</span>
	                </div>
	                @endif
					<div class="form-group">
						<label for="exampleInputPassword1" class="text-uppercase">Re_Password</label>
						<input type="password" class="form-control" placeholder=""name="re_password">
					</div>
					@if($errors->has('re_password'))
	                <div class="helper" >
	                  <span>{{$errors->first('re_password')}}</span>
	                </div>
	                @endif
					<div class="form-group">
						<label for="exampleInputEmail1" class="text-uppercase">Address</label>
						<input type="text" class="form-control" placeholder=""name="address">
					</div>
					@if($errors->has('address'))
	                <div class="helper" >
	                  <span>{{$errors->first('address')}}</span>
	                </div>
	                @endif
					<div class="form-group">
						<label for="exampleInputEmail1" class="text-uppercase">Phone</label>
						<input type="text" class="form-control" placeholder=""name="phone">
					</div>
					@if($errors->has('phone'))
	                <div class="helper" >
	                  <span>{{$errors->first('phone')}}</span>
	                </div>
	                @endif
					<div class="form-check">
						<button type="submit" style="width: 100%;background: black;color: #fff;" class="btn btn-login float-right">Register</button>
					</div>
				</form>
			</div>
		</div>
	</div>       
</section>
@stop()