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
				  @if(Session::has('success'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      <strong>{{Session::get('success')}}</strong> 
                    </div>
                    @endif
					<div class="form-group">
						<label for="exampleInputEmail1" class="text-uppercase">Please enter your email to retrieve your password</label>
						<input type="text" class="form-control" placeholder="" name="email">
					@if($errors->has('email'))
	                <div class="helper">
	                  	<span>{{$errors->first('email')}}</span>
	                </div>
	                @endif
					</div>
					<div class="form-check">
						<button type="submit" style="width: 100%;background: black;color: #fff;" class="btn btn-login float-right">Confirm</button>
					</div>
				</form>
			</div>
		</div>
	</div>       
</section>
@stop()