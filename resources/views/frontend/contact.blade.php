@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container-fluid khoangcach" style="margin-top: -20px" >
    <div class="row">
          <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg')">
              <div class="container">
                  <h1 class="text-light">CONTACT US</h1>
                  <div class="sep-sm bg-light chu"></div>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb text-light">
                          <li  class="glyphicon glyphicon-home"><a href="{{route('home')}}" style="text-decoration: none;">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page"><a href="" style="text-decoration: none;">Contact</a></li>
                      </ol>
                  </nav>
              </div>
          </div>
      </div>  
</div>
<div class="container" style=" margin-top: 50px;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6576008138995!2d105.7812622147318!3d21.046381985988855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab32dd484c53%3A0x4201b89c8bdfd968!2zMjM4IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBD4buVIE5odeG6vywgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1591068447060!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">  
    </iframe>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class=" col-md-4">
            <h1>Fell Free Don't Hesitate To Contact With Us</h1>
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
              	<div class="col-md-4" style="background: #ccbfbe;width: 60px;height: 60px;">
              		 <i class="fas fa-phone-alt" style="padding: 15px;"></i>
              	</div>
              	<div class="col-md-8">
              		<p>0962562810</p>
              		<p>0969999999</p>
              	</div>
            </div>
            <br>
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
              	<div class="col-md-4" style="background: #ccbfbe;width: 60px;height: 60px;">
              		 <i class="fas fa-map-marker-alt" style="padding: 15px;"></i>
              	</div>
              	<div class="col-md-8">
              		<p>238 Hoang Quoc Viet Street </p>
              		<p>Ha Noi, Viet Nam</p>
              	</div>
            </div>
            <br>
            <div class="row" style="margin-left: 0px;margin-right: 0px;">
              	<div class="col-md-4" style="background: #ccbfbe;width: 60px;height: 60px;">
              	   <i class="fas fa-envelope-open-text" style="padding: 15px;"></i>
              	</div>
              	<div class="col-md-8">
              		<p>admin@gmail.com</p>
              		<p>company@gmail.com</p>
              	</div>
            </div>
        </div>
      <div class="col-md-8 " style="background: #ff9;height: 500px;border-color: #3ff double 1px;">
        	<form action="{{route('post_contact')}}" method="POST">
            @csrf
        		  <h2>Contact</h2>
              @if(Session::has('success'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>{{Session::get('success')}}</strong> 
              </div>
              @endif
  				    <div class="form-group ">
  				      <input type="text" class="form-control"  placeholder="Your name" style="height: 40px; width: 100%;" name="name" >
              @if($errors->has('name'))
              <div class="helper" >
                <span>{{$errors->first('name')}}</span>
              </div>
              @endif
  				    </div>
  				    <div class="form-group ">
  				      <input type="email" class="form-control"  placeholder="Your email address" style="height: 40px; width: 100%;" name="email">
                @if($errors->has('email'))
              <div class="helper" >
                <span>{{$errors->first('email')}}</span>
              </div>
              @endif
  				    </div>             
            <div class="form-group">
             <input type="text" class="form-control"  placeholder="Subject" style="height: 40px;"name="subject">
             @if($errors->has('subject'))
              <div class="helper" >
                <span>{{$errors->first('subject')}}</span>
              </div>
              @endif
            </div>            
  				  <div class="form-group">
  				    <input type="text" class="form-control" placeholder="Mesage here!" style="height: 140px;" name="content">
              @if($errors->has('content'))
              <div class="helper" >
                <span>{{$errors->first('content')}}</span>
              </div>
              @endif
  				  </div>			        
  				  <button type="submit" class="btn btn-danger" style="width: 40%">Send</button>
          </form>  
      </div>
    </div>
</div>
@stop()