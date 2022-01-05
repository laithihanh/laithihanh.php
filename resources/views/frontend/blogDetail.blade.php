@extends('frontend.main')

<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container-fluid" style="margin-top: -20px">
	<div class="row">
		<div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg')">
			<div class="container">
				<h1 class="text-light">Blog Details</h1>
				<div class="sep-sm bg-light"></div>
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb text-light">
						<li class="glyphicon glyphicon-home"><a href="{{route('home')}}" style="text-decoration: none;">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page"><a href="" style="text-decoration: none;">Blog standard</a></li>
					</ol>
				</nav>
			</div>
		</div>
	</div>	
</div>
<section>
	<div class="container ">
		<div class="col-md-8">
			@foreach($blogDetail as $value)
			<p>
				{!!$value->content!!}
			</p>
			@endforeach()
			<div class="row">
				<div class="col-md-12">
					<h2>Comment ({{$comment->count()}})</h2>
					<div class="col-md-6">
					@foreach($comment as $value)
			            <h3> {{$value->cus->name}} </h3>
			            <p>{{$value->created_at}}</p>
			            <h4>{{$value->content}}</h4> 	 
					@endforeach()
					</div>
					<div class="col-md-6">
			        	<form action="{{route('comment',$tintuc->blog_id)}}" method="POST" role="form">
			                    <legend>Leave a reply</legend>
			                     @csrf
			                     @if(Session::has('success'))
			                    <div class="alert alert-success">
			                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			                      <strong>{{Session::get('success')}}</strong> 
			                    </div>
			                    @endif
			                    <div class="form-group">
			                      <label for="">You comment</label> 
			                      <textarea name="content" id="input" class="form-control" id="content" rows="3" required="required"></textarea>
			                    </div>
			                   <button type="submit" class="btn btn-primary js_rating_product">Post comment</button>
			            </form>
	       			</div>
				</div>
			</div>
		</div>
		
		<div class="col-md-4">
				<div class="blogs-filter border-md">
                    <h5><b>SEARCH</b></h5>
                        <div class="sep-xs bg-secondary"></div>
                       <form action="{{route('tktin')}}" method="get" class="navbar-form " role="search"> 
				           <div class="form-group">
				             <input type="text" class="form-control"  name="key" placeholder="Search">
				           </div>
				           <button style="height: 30px;" type="submit"class="glyphicon glyphicon-search"></button>
				       </form>
                </div>
                <div  id="border-md"class="blogs-filter border-md" >
                    <div class=" col-md-12">
                		<img src="{{url('public')}}/assets/images/tintuc/blog.jpg" alt="" id="img" class="img-responsive">
                		<div class="caption">
                			<h3>Giorgio Armani</h3>
                			<p>
                				<i class="i">CEO & Founder</i>
                			</p>
                			<p>Giorgio Armani - co-founder and sole owner of famous fashion brands.</p>
                			<p >
                				<i><a href="" class="fab fa-facebook-f"></a></i>
                				<i><a href="" class="fab fa-twitter"></a></i>
                				<i><a href="" class="fab fa-google"></a></i>
                				<i><a href="" class="fab fa-pinterest-square"></a></i>
                			</p>
                		</div>
                    </div>
                </div>
                <div class="blogs-filter border-md" style="height: 900px;">
                	<h5>LATEST POST</h5>
                	@foreach($tin as $value)
	                <div class="row">
	                    <div class="col-md-6 ">
	                        <div class="img-fx img-zoom">
	                            <a href="#"><img src="{{url('uploads')}}/{{$value->images}}" id="card-img"alt="" ></a>
	                        </div>
	                    </div>
	                    <div class="col-md-6">
	                    	<p>{{$value->title}}</p>
	                    	<li id="content"><a href=""id=""class="glyphicon glyphicon-sound-dolby" style="color: #ff748c">{{$value->created_at}}</a></li>
	                    </div>
	                </div>
	                <hr>
	                @endforeach()
                </div>
                <div class="products-filter border-md">
                    <h5 class="h5">CATEGORIES</h5>
                    <div class="sep-xs bg-secondary"></div>
					@foreach($category as $cate)
                    <ul class="accordion" id="categories">
                        <li id="womanFilter">
                            <a href="" style="text-decoration: none;color: black">{{$cate->name}}</a>
                        </li>
                    </ul>
                     @endforeach()
                </div>
		</div>
	</div>
</section>
@stop()