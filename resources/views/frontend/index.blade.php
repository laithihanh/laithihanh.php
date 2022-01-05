@extends('frontend.main')
@section('content')
<div class="container-fluid padding_zero" style="margin-top: -20px" >
  <div class="row">
    <div class="row justify-content-center">   
      <div class="col-12 col-md-12 ">     
        <div class="owl-carousel owl-theme">
          @foreach($baner as $value)
          <div class="item">
            <img src="{{url('uploads')}}/{{ $value->images }}" style="width: 100%"alt="" >
            <div class="centered centered1 col-10 col-md-6 col-lg-4  item1 text-white th">
              <h1 class="animated fadeInUp mr-0">{{ $value->name }}<br>New Brand Collection</h1>
              <p class="fadeInUp my-1 my-md-4 animated ">{{ $value->content }}</p>
              <div class="it1">
                <a href="" class="btn btn-default px-3 py-1 px-md-4 py-md-2 zoomIn animated"><b>Buy Now</b> <i class="fas fa-caret-right "></i></a>
              </div>
            </div>
          </div> 
          @endforeach   
        </div>  
      </div>
    </div>
  </div>
</div>
<div class="container" style="margin-top: 20px; margin-right: 50px;">
    <div class="row">
      @foreach($i as $value)
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="tot">
          <img src="{{url('uploads')}}/{{ $value->images }}" alt="Image" style="margin-left: 98px;padding-top: 10px;">
          <div>
            <h4>{{ $value->name }}</h4>
            <p>{{ $value->content }}</p>
          </div>
        </div>
      @endforeach()
    </div>
</div> 
<div class="container">
    <div class="row">
        <div class="text-center" style="margin-top: 50px;">
            <h1>Top Categories</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> 
        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class=" col-md-4">
            <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/product/product1.jpg'); height: 625px;">
                <h3 class="ee"><a href="{{route('category1')}}" style="color:black;text-decoration: none">JEANS</a></h3>
                <a style="text-decoration: none"class="tt"href="{{route('category1')}}" >Read More-></a>
            </div>  
        </div>
        <div class="col-md-8 ">
            <div class="col-md-12">
                <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/category/phukien.jpg')"> 
                    <h3 class="ee"><a href="{{route('category2')}}"style="color: black;text-decoration: none">FASHION ACCESSORIES</a></h3>
                    <a style="text-decoration:none;"class="tt" href="{{route('category2')}}"style="margin-left: 358px;margin-top: 90px;">Read More-></a>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-6">
                    <div class="breadcrumb-header" style="background-image:url('{{url('public')}}/assets/images/category/sominu.jpg')">
                        <h3 class="ee"><a href="{{route('category3')}}" style="color: black;text-decoration: none">WOMEN'S SHIRTS</a></h3>
                        <a style="text-decoration: none" class="tt"href="{{route('category3')}}" >Read More-></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div  id="nen"class="breadcrumb-header">    
                        <h3 class="ee"><a href="{{route('category4')}}"style="color: black;text-decoration: none">MEN'S SHIRTS</a></h3>
                        <a  style="text-decoration: none" class="tt" href="{{route('category4')}}" >Read More-></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="carousel-id" class="carousel " data-ride="carousel" style="background: #d1cfcb; margin-top: 10px">
            <ol class="carousel-indicators">
              <li data-target="#carousel-id" data-slide-to="0" class=""></li>
            </ol>
            <div class="container-fluid video">
                <div id="nn"class="row mbr-justify-content-center" >
                    <div class="col-lg-6  mbr-col-md-10 mm" >
                        <iframe class="embed-responsive-item" width="500" height="409" src="https://www.youtube.com/embed/o_jVikmJuEU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 mbr-col-md-10" style="top: 50px;">
                         <h1>Trending Fashion</h1>
                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non molestiae ab animi consectetur ratione doloremque aspernatur laudantium cum illum reprehenderit debitis, accusantium quisquam reiciendis soluta id. Sed repellendus dignissimos dolore..</p>
                        <button type="button"  id="uu"class="btn btn-infor" style="background: red;color: white;font-size: 15px;">VIEW NOW</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="text-center" >
          <h1>Products </h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero autem fugiat eaque facilis vel.
        </div>
    </div>
</div>
<div class="main-content py-100">
    <div class="container">
        <div class="mb-100 overflow-hidden">
            <div class=" card-item-slider ltr" id="itemSliderLight">
                @foreach($product as $value)
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                <div class="item">
                    <div class="card-item card-item--light">
                        <div class="card-item__bg">
                            <a href="#"><img src="{{url('uploads')}}/{{$value->images}}"  style="width: 100%,height: 500px" alt="" class="img-responsive">
                            </a>
                        </div>
                        <div class="card-item__body">
                            <div class="product-info__price">
                              @if($value->sale_price==0)
                                <span class=" gia">{{$value->price}}k</span>
                              @else         
                                <span class=" gia">{{$value->sale_price}}k</span>
                                <span class="old " style="text-decoration: line-through;">{{$value->price}}k</span>
                              @endif
                            </div>
                            <div class="card-item__body--title">
                                <h3>{{$value->name}}</h3>
                            </div>
                            <div class="product-rate">
                                <span class="rating" data-id="154277"> 
                                    @for($i =1 ;$i<=5;$i++)
                                      @if($i<=$value->number_star($value->product_id))
                                        <span href="#" class="fa-star fa"></span>
                                      @else
                                        <span href="#" class="far fa-star"></span>
                                      @endif
                                     @endfor
                                </span>
                            </div>
                        </div>
                        <div class="card-item__overlay">
                            <ul class="action-btn">
                                <li><a href="{{route('single',$value->product_id)}}" class="icon-box"><i class="glyphicon glyphicon-search"style="font-size: 15px; color:black"></i></a></li>
                                <li class="wishlist-btn">
                                  <span class="icon-box">
                                    <a  href="{{route('addWishlist',['id'=>$value->product_id])}}"class="glyphicon glyphicon-heart-empty" style="font-size: 15px; color:black; text-decoration: none"></a>
                                  </span>
                                </li>
                            </ul>
                            <a onclick="AddCart('{{$value->product_id}}')" href="javascript:" class="btn" >Add to cart</a>
                        </div>
                    </div>
                </div>
                </div>
                 @endforeach()
            </div>
        </div>
    </div>
</div>
<section class="section section-bg-fix overlay-black"style="background-image: url('{{url('public')}}/assets/images/banner/shop.jpg');height: 300px">
    <div class="container text-center" style="margin-top: 50px;">
        <h3 class="text-light">Special offer</h3>
        <h1 class="display-4 text-light mb-4">Sale 50%</h1>
        <button class="btn btn-danger btn-lg" type="button"  > <a href="{{route('shop')}}" style="text-decoration: none;color: white">SHOP NOW</a></button>
    </div>
</section>
<div class="container" style="margin-top: 50px"> 
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 logo">
      <img src="{{url('public')}}/assets/images/icon/anhicon1.jpg" />
    </div>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 logo">
      <img src="{{url('public')}}/assets/images/icon/anhicon2.jpg" />
    </div> 
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 logo">
      <img src="{{url('public')}}/assets/images/icon/anhicon3.jpg" />
    </div>  
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 logo">
      <img src="{{url('public')}}/assets/images/icon/anhicon4.jpg" />
    </div>  
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 logo">
      <img src="{{url('public')}}/assets/images/icon/anhicon5.jpg" />
    </div>  
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 logo">
      <img src="{{url('public')}}/assets/images/icon/anhicon6.jpg" />
    </div>  
</div>
<div class="container">
    <div class="row">
        <div class="text-center" style="margin-top: 50px;">
           <h1>From Our Blog</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium odit eius commodi saepe voluptatum. </p> 
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
      @foreach($blog as $value)
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="">
              <a href="{{route('blogDetail',$value->blog_id)}}"><img src="{{url('uploads')}}/{{$value->images}}" style="width: 100%; height: 450px" class="img-responsive"></a>
              <div class="caption">
                  <h3>{{$value->name}}</h3>
                  <p>
                    {{$value->title}}
                  </p>
              </div>
            </div>
        </div>
      @endforeach()
    </div>
</div>
@stop()
@section('script')
<script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-36251023-1']);
      _gaq.push(['_setDomainName', 'jqueryscript.net']);
      _gaq.push(['_trackPageview']);
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
</script>
<script>
  $('#owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
</script>
<script>
@if(Session::has('thongbao'))
    toastr.success("Đăng nhập thành công")
@endif
</script>
<script>
@if(Session::has('alert'))
    toastr.success("Đăng xuất thành công")
@endif
</script>
@stop()