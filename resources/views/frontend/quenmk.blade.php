@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')

<section class="login-block" style="margin-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 login-sec">
				<?php 
				  $message=Session::get('message');
				  if($message){
				    echo '<span class="text-alert"style="color: red;font-size: 17px;width: 100%;text-align:center;
				  font-weight: bold;">'.$message.'</span>';
				    Session::put('message',null);
				  }
				?>
				<form action="" method="POST">
				  @csrf
					<div class="form-group">
						<label for="exampleInputPassword1" class="text-uppercase">Password</label>
						<input type="password" class="form-control"  placeholder="" name="password">
					@if($errors->has('password'))
	                <div class="helper" >
	                  	<span>{{$errors->first('password')}}</span>
	                </div>
	                @endif
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="text-uppercase">Confim Password</label>
						<input type="password" class="form-control"  placeholder="" name="password_confim">
					@if($errors->has('password'))
	                <div class="helper" >
	                  	<span>{{$errors->first('password')}}</span>
	                </div>
	                @endif
					</div>
					<div class="form-check">
						<button type="submit" style="width: 100%;background: black;color: #fff;" class="btn btn-login float-right">Reset Password</button>
					</div>
				</form>
			</div>
		</div>
	</div>       
</section>
@stop()