@extends('frontend.main')
<!-- end main header navbar -->
<!-- main header slider -->
@section('content')
<div class="container-fluid khoangcach"style="margin-top: -20px;" >
	<div class="row">
        <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/banner/shop-baner.jpg')">
            <div class="container">
                <h1 class="text-light chu">Blog </h1>
                <div class="sep-sm bg-light"></div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-light">
                        <li  class="glyphicon glyphicon-home"><a href="{{route('home')}}" style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="" style="text-decoration: none;">Blog</a></li>
                    </ol>
                </nav>
            </div>
        </div>
	</div>	
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				@foreach($blog as $value)
				<div class="col-md-6">
					<div class="">
					<a href="{{route('blogDetail',$value->blog_id)}}"><img src="{{url('uploads')}}/{{$value->images}}" style="max-height: 460px"alt="" class="img-responsive"></a>
					<div class="caption">
						<ul class="icon">
							<li><a href="#"id="icon" class="glyphicon glyphicon-user">ByAdmin</a></li>
							<li><a href="#"id="icon"class="glyphicon glyphicon-sound-dolby">{{$value->created_at}}</a></li>
						</ul>
						<h3>{{$value->title}}</h3>
					</div>
					</div>
				</div>
				@endforeach()
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
	                            <a href="{{route('blogDetail',$value->blog_id)}}"><img src="{{url('uploads')}}/{{$value->images}}" id="card-img"alt="" ></a>
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
	</div>
</section>
@stop()